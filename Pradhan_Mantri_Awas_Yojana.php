<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PMAY</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

   <?php

require_once("Header.php");
?>

    <br>
    <br>
    <!-- ##### Header Area End ##### -->
	<div class="container">
		<form action="" method="POST" role="form">
		<div class="row">
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Occupation</label>
					<input type="text" class="form-control" name="occupation" placeholder="Occupation" required maxlength="10">
				</div>
			</div>
				<div class="col-lg-4">
				<div class="form-group">
					<label for="">Loan Amount</label>
					<input type="text" class="form-control" name="amount" placeholder="Enter Loan Amount" required>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Firm Name (as per PAN Card)</label>
					<input type="text" class="form-control" name="firmname" placeholder="Enter Firm Name" required>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Annual Turnover</label>
					<input type="text" class="form-control" name="annualincome" placeholder="Annual Income" required>
				</div>
			</div>
			<div class="col-lg-4">
			<div class="form-group">
			<label for="">Monthly Income</label>
					<input type="text" class="form-control" name="income" placeholder="Enter Monthly Income" required>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Current Residence City</label>
					<input type="text" class="form-control" name="city" placeholder="Enter City" required>
				</div>
			</div>
				<div class="col-lg-4">
				<div class="form-group">
					<label for="">Full Name (as per PAN Card)</label>
					<input type="text" class="form-control" name="name" placeholder="Name" required>
				
			</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Email Address</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email Address" required maxlength="6">
				
			</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Mobile Number</label>
					<input type="text" class="form-control" name="mobileno" placeholder="Enter 10-digit Mobile Number" required maxlength="10"><br><br>
				</div>

                <!-- Birthday form -->
				<form action="/action_page.php">
                Date of Birth:
                <input type="date" name="bday">
                <input type="submit" value="Submit">
                </form>	
</div>
		
			<div class="checkbox">
               <form ... onsubmit="return checkForm(this);"><br>
               <p1><input type="checkbox" required name="terms"> I authorize the website and its partner providers to call or SMS me in connection with my application & agree to the <u>Privacy Policy</u> and <u>Terms of use</u>.</p1>
            
            </form>
			</div>

			<div class="container">
				<br>
				<button type="submit" class="btn btn-primary" value="Uplaod">Apply Now</button>
			
	</div>
</div>
</div>
		</form>
	</div>
	</div>	
<br>
<br>
<br>

<section style="background-color: #f2f4f6" align="justify" style="margin-left: 30px" style="margin-right: 30px">
<div style="align-self: center;">
	<br>
	<br>


<h1>Pradhan Mantri Awas Yojana</h1>
<p1>With a view to help people own a roof over their head government has announced ‘Housing for All by 2022’ mission, under which it is partly financing the interest cost to the borrowers. The same is done under Pradhan Mantri Awas Yojana (PMAY) in urban areas as well as in rural area.<br>

Pradhan Mantri Awas Yojana Eligibility Criteria
This scheme is available for acquiring or constructing residential units in the 4,041 statutory towns as per the 2011 census and 274 additional towns, which have separately been notified by the state government. The details of such towns can be downloaded from <u>http://nhb.org.in/government-scheme/pradhan-mantri-awas-yojana-credit-linked-subsidy-scheme/statutory-towns/</u><br>

For qualifying under the scheme the individual should own any pucca house either in his/her name or in the name of any unmarried child anywhere in India. The home loan under this scheme can also be availed for the purpose of extension of the existing residential house, either self-acquired or inherited, in addition to for acquiring or constructing a new house. In case the borrower wants to avail home loan under PMAY for extension of his existing house then the condition of owning a pucca house does not apply.<br>

The eligibility for availing the home loans under the Pradhan Mantri Awas Yojana is based on the income for the family as a whole and not only of the head of the family. In order to avail the subsidy offer under PMAY home loans the borrower has to submit a self-declaration for income of the family and about the title of the property to be purchased.
<br>
In case the home loan is disbursed for construction of property or self construction, the lender has to monitor the construction progress and legal compliance of the dwelling units financed under the PMAY scheme, like approvals for the building design, infrastructure facilities, quality of construction, etc. The lender is also required to verify the costs incurred up to different stages of construction, through site visits, photographs of the site certificates of architect, engineers etc. The government provides subsidy only for home loans under PMAY but the lender has to take all the necessary precautions, which it takes for any other home loans.<br>

The house which qualifies for the interest subsidy, can either be a single unit or a unit under any multi story building. The eligible unit under Pradhan Mantri Awas Yojana needs to have basic facilities and infrastructure like toilet, water, sewerage, road, electricity, etc. For the purpose of ascertaining eligibility only area on which a carpet can be laid shall be considered and therefore it will not include the walls in the house or the outer wall of the house.
<br>
The house to be constructed or acquired under PMAY has be purchased either in the name of the female head of the family or alternatively, in the joint name of the male head of the household and his wife. The dwelling unit can be acquired in the name of the male member of the family only if there is no adult female member in the family.
<br>
</p1>
</div>
</section>


<?php

require_once("Footer.php");
?>

</body>

</html>
