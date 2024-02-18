<?php  
session_start();
include('connect.php');
$iid=$_SESSION["iid"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Non-Disclosure Agreement (NDA)</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

.header {
    text-align: center;
    margin-bottom: 30px;
}

.content {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
}

.content h2 {
    color: #333;
    border-bottom: 2px solid #333;
    padding-bottom: 10px;
}

.content p {
    color: #555;
    line-height: 1.6;
}

.signature {
    margin-top: 30px;
}

.signature p {
    margin-top: 20px;
}

</style>
</head>
<body>

<div class="container">

    <div class="header">
        <h1>Non-Disclosure Agreement (NDA)</h1>
    </div>

    <div class="content">

        <h2>1. Definition of Confidential Information</h2>
        <p>Confidential Information shall include any information disclosed by either party to the other party in connection with the potential investment in the Entrepreneur's idea <?php echo $_SESSION["idea_name"]?>. This includes, but is not limited to, business plans, financial information, intellectual property, and any other proprietary information.</p>

        <h2>2. Non-Disclosure Obligation</h2>
        <p>Both parties agree to hold all Confidential Information in strict confidence and not to disclose it to any third party without the prior written consent of the disclosing party.</p>

        <h2>3. Use of Confidential Information</h2>
        <p>The Confidential Information shall only be used by the receiving party for the purpose of evaluating and discussing the potential investment in the Entrepreneur's Idea. The receiving party shall not use the Confidential Information for any other purpose without the prior written consent of the disclosing party.</p>

        <h2>4. Exceptions</h2>
        <p>The obligations of confidentiality set forth in this Agreement shall not apply to any information that: (a) is or becomes publicly available through no fault of the receiving party; (b) was already known to the receiving party prior to disclosure by the disclosing party; (c) is independently developed by the receiving party without the use of Confidential Information; or (d) is rightfully obtained by the receiving party from a third party without restriction on disclosure.</p>

        <h2>5. Term</h2>
        <p>This Agreement shall remain in effect for a period of 6 Years from the date of its execution.</p>

        <h2>6. Governing Law</h2>
        <p>This Agreement shall be governed by and construed in accordance with the laws of India.</p>

        <h2>7. Entire Agreement</h2>
        <p>This Agreement constitutes the entire understanding between the parties with respect to the subject matter hereof and supersedes all prior agreements and understandings, whether written or oral, relating to such subject matter.</p>
        <form action="sign_nda.php">
        <div class="signature">
            <p>In Witness Whereof, the parties have executed this Agreement as of the date first above written.</p>
            <p>[Investor Id]</p>
            <p><?php echo $iid ?></p>
            <p>______________________________</p>
            <button>I Agree</button>
        </div>
        </form>
    </div>

</div>
</body>
</html>