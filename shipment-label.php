<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$orderID = $_GET['orderid'];
$date = $_GET['date'];
$dimension = $_GET['dimension'];
$recipent = $_GET['to'];
$address = $_GET['location'];
$tracking = $_GET['tracking'];
$quantity = $_GET['quantity'];

function public_path($imageName) {
    $scriptPath = realpath(__DIR__);
    $publicPath = realpath($scriptPath . '/../images/' . $imageName);
    return $publicPath;
}

$imageUrl = "https://api.qrserver.com/v1/create-qr-code/?data=".$orderID."&amp;size=100x100";
$imageData = file_get_contents($imageUrl);
$qrImage = 'data:image/png;base64,' . base64_encode($imageData);

$html = '<html style="padding: 0;margin: 0;">
<head>
</head>

<body style="font-family: sans-serif; width: 400px; margin-top: 50px;font-size: 12px;padding: 0;">
   <table  style="border: 5px solid #000; padding: 0;" cellpadding="0" cellspacing="0">
       <tr>
           <td style="padding:5px;"></td>
           <td style="padding:5px;"></td>  
       </tr>
       <tr>
           <td style="width: 40%; padding-left: 10px;">
               <!-- Inner Table -->
               <table>
                   <tr style="vertical-align: top;">
                       <td><strong>From:</strong></td>
                       <td>Gold Remodels 110 Market Street Clifton, NJ 07012</td>
                   </tr>
               </table>
           </td>
           <td style="border-left: 5px solid #000;padding: 0 10px;">
               <table>
                   <tr>
                       <td><strong>Order ID:</strong></td>
                       <td>'.$orderID.'</td>
                   </tr>
                   <tr>
                       <td><strong>Date:</strong></td>
                       <td>'.$date.'</td>
                   </tr>
                   <tr>
                       <td><strong>Dimensions:</strong></td>
                       <td>'.$dimension.'</td>
                   </tr>
               </table>
           </td>
       </tr>
       
       <tr>
           <td style="padding: 20px 10px 10px;">
               <strong>To: '.$recipent.'<br>'.$address.'</strong></td>
           <td></td>
       </tr>
       
       <tr>
           <td colspan="2" style="border-bottom: 5px solid #000;"></td>
       </tr>
       
       <tr>
           <td></td>
           <td style="padding: 10px;text-align: right;">
               <img src="'.$qrImage.'" alt="" style="height:150px;">
           </td>
       </tr>
       
       <tr>
           <td style="padding: 10px;" colspan="2"><strong style="font-size: 16px;">QUICKKSHIP EXPRESS</strong></td>
       </tr>
       
       <tr>
           <td style="padding: 0 0 10px 10px;"><strong>Tracking #:</strong>'.$tracking.'</td>
           <td style="text-align: right; padding: 0 10px 10px 0;"><strong>QTY.'.$quantity.'</strong></td>
       </tr>
       
       <tr>
           <td colspan="2" style="border-bottom: 5px solid #000;"></td>
       </tr>
       
       <tr>
           <td colspan="2" style="padding: 30px 0;text-align: center;font-size: 16px;"><strong>Thank you</strong></td>
       </tr>
       
       <tr>
           <td style="padding: 10px;">
               <strong>Distributor</strong><br>
               QuickkShip LLC <br>
               Quickkship.com
           </td>
           <td></td>
       </tr>
   </table>
</body>
</html>';

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');

// Adjust body margin
$dompdf->set_option('margin-top', '0mm');
$dompdf->set_option('margin-bottom', '0mm');
$dompdf->set_option('margin-left', '0mm');
$dompdf->set_option('margin-right', '0mm');

$dompdf->render();
$pdf_content = $dompdf->output();
$fileName = "invoice-" . strtotime(Date('Y-m-d-s')) . '.pdf';
$file_path = __DIR__ . '/shipmentLabels/' . $fileName;
file_put_contents($file_path, $pdf_content);
header('location:/shipmentLabels/'.$fileName);
