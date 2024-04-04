<?php
include("connection.php");
$result = mysqli_query($conn,"SELECT * FROM payslip_new WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Payslip</title>
<style type="text/css">
 * {margin:0; padding:0; text-indent:0; }
 .s1 {
     color: black; font-family:"Trebuchet MS", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 28.5pt; 
     text-align: center;
    }
 p { color: black; font-family:"Trebuchet MS", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9.5pt; margin:0pt; }
 h1 { color: black; font-family:"Trebuchet MS", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11.5pt; }
 .s2 { color: black; font-family:"Trebuchet MS", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9.5pt; }
 table, tbody {vertical-align: top; overflow: visible; }
 .su{
    padding-top: 11pt;
    text-align: center;
 }
</style>
</head><body>
    <form class="form">
    <p style="text-indent: 0pt;text-align: left;"></p>
    <p class="s1" >HTGE technologies pvt ltd</p>
    <!-- <p class="s1 " style="padding-top: 3pt;padding-left: 148pt;text-indent: 0pt;text-align: center;">HTGE technologies pvt ltd</p> -->
    <!-- <p style="padding-top: 11pt;padding-left: 181pt;text-indent: -3pt;text-align: center;">100 feet road ,Ellaipillaichavady pondicherry, puducherry, India - -605005</p> -->
    <p class="su" >100 feet road ,Ellaipillaichavady pondicherry, puducherry, India - -605005</p>
    <p style="text-indent: 0pt;text-align: left;">
        <br/>
    </p>
    <!-- <h1 style="padding-top: 8pt;padding-left: 146pt;text-indent: 0pt;text-align: center;">Payslip for the month of Jan, 2024</h1> -->
    <?php
// Execute the query and fetch the result
$result = mysqli_query($conn, "SELECT DATE_FORMAT(Date, '%M') AS month_name FROM payslip_new WHERE id='" . $_GET['id'] . "'");
$row1 = mysqli_fetch_assoc($result);

// Access the month name field and output it
$month_name = $row1['month_name'];
// echo $month_name; 
?>
    <h1 style="padding-top: 8pt;text-align:center;">Payslip for the month of <?php echo $month_name; ?>, 2024</h1>
    <p style="text-indent: 0pt;text-align: left;"><br/></p>
    <table style="border-collapse:collapse;margin-left:6.17629pt" cellspacing="0">
        <tr style="height:23pt">
            <td style="width:93pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Name:</p>
            </td>
            <td style="width:181pt;border-top-style:solid;border-top-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s2" style="padding-top: 7pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"> <?php echo $row['Name']; ?></p>
            </td>
            <td style="width:143pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Employee ID:</p>
            </td>
            <td style="width:132pt;border-top-style:solid;border-top-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['Employee_ID']; ?></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:93pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Designation:</p>
            </td>
            <td style="width:181pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['designation']; ?></p>
            </td>
            <td style="width:143pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Bank Name:</p>
            </td>
            <td style="width:132pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['bank_name']; ?></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:93pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Department:</p>
            </td>
            <td style="width:181pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['department']; ?></p>
            </td>
            <td style="width:143pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Bank Account Number:</p>
            </td>
            <td style="width:132pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['bank_ac']; ?></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:93pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Location:</p>
            </td>
            <td style="width:181pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['location']; ?></p>
            </td>
            <td style="width:143pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">PAN:</p>
            </td>
            <td style="width:132pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['pan']; ?></p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td style="width:93pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">LOP:</p>
            </td>
            <td style="width:181pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;text-align: left;"><?php echo $row['LOP']; ?></p>
            </td>
            <td style="width:143pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/>
                </p>
            </td>
            <td style="width:132pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/>
                </p>
            </td>
        </tr>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br/></p>
    <table style="border-collapse:collapse;margin-left:6.17629pt" cellspacing="0">
        <tr style="height:26pt">
            <td style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Earnings</p>
            </td>
            <td style="width:98pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">Amount</p>
            </td>
            <td style="width:159pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Deductions</p>
            </td>
            <td style="width:116pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
                <p class="s2" style="padding-top: 7pt;padding-left: 70pt;text-indent: 0pt;text-align: left;">Amount</p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Basic</p>
            </td>
            <td style="width:98pt;border-top-style:solid;border-top-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['basic']; ?></p>
            </td>
            <td style="width:159pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Income Tax</p>
            </td>
            <td style="width:85pt;border-top-style:solid;border-top-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-right: 1pt;text-indent: 0pt;text-align: right;">₹</p>
            </td>
            <td style="width:31pt;border-top-style:solid;border-top-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 1pt;text-indent: 0pt;text-align: left;"><?php echo $row['incometax']; ?></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:176pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">HRA</p>
            </td>
            <td style="width:98pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['hra']; ?></p>
            </td>
            <td style="width:159pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Provident Fund</p>
            </td>
            <td style="width:85pt">
                <p class="s2" style="padding-top: 3pt;padding-right: 1pt;text-indent: 0pt;text-align: right;">₹</p>
            </td>
            <td style="width:31pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 1pt;text-indent: 0pt;text-align: left;"><?php echo $row['pf']; ?></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:176pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Telephone Reimbursements</p>
            </td>
            <td style="width:98pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['telephone']; ?></p>
            </td>
            <td style="width:159pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Professional Tax</p>
            </td>
            <td style="width:85pt">
                <p class="s2" style="padding-top: 3pt;padding-right: 1pt;text-indent: 0pt;text-align: right;">₹</p>
            </td>
            <td style="width:31pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 1pt;text-indent: 0pt;text-align: left;"><?php echo $row['proftax']; ?></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:176pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Bonus</p>
            </td>
            <td style="width:98pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['bonus']; ?></p>
            </td>
            <td style="width:159pt;border-left-style:solid;border-left-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
            <td style="width:85pt">
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
            <td style="width:31pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td style="width:176pt;border-left-style:solid;border-left-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">LTA</p>
            </td>
            <td style="width:98pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['lta']; ?></p>
            </td>
            <td style="width:159pt;border-left-style:solid;border-left-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/>
                </p>
            </td>
            <td style="width:85pt">
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
            <td style="width:31pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/>
                </p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td style="width:176pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Special Allowance</p>
            </td>
            <td style="width:98pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s2" style="padding-top: 3pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['Special_Allowance']; ?></p>
            </td>
            <td style="width:159pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
            <td style="width:85pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
            <td style="width:31pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br/>
                </p>
            </td>
        </tr>
        <tr style="height:26pt">
            <td style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Total Earnings</p>
            </td>
            <td style="width:98pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: right;">₹ <?php echo $row['earning_total']; ?></p>
            </td>
            <td style="width:159pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">Total Deductions</p>
            </td>
            <td style="width:85pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-right: 1pt;text-indent: 0pt;text-align: right;">₹</p>
            </td>
            <td style="width:31pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="padding-top: 7pt;padding-left: 1pt;text-indent: 0pt;text-align: left;"><?php echo $row['dection_total']; ?></p>
            </td>
        </tr>
    </table>
    <p style="padding-top: 11pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Net Pay for the month: <b>₹ <?php echo $row['netpay']; ?></b></p>
    <p style="text-indent: 0pt;text-align: left;"><br/></p>
    <p style="padding-left: 5pt;text-indent: 0pt;line-height: 1pt;text-align: left;"></p>
    <!-- <p style="padding-top: 4pt;padding-left: 117pt;text-indent: 0pt;text-align: center;">This is a system generated payslip and does not require signature.</p> -->
    <hr>
    <p style="padding-top: 4pt;text-align: center;">This is a system generated payslip and does not require signature.</p>
    <input type="button" id="create_pdf" value="Generate PDF">
    </form>
        </body>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script>
    $(document).ready(function() {
        var form = $('.form'),
            cache_width = form.width(),
            a4 = [595.28, 841.89]; // for a4 size paper width and height  

        $('#create_pdf').on('click', function() {
            $('body').scrollTop(0);
            createPDF();
        });

        function createPDF() {
            getCanvas().then(function(canvas) {
                var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('Payslip.pdf');
                form.width(cache_width);
            });
        }

        function getCanvas() {
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }
    });
</script>
            </html>
