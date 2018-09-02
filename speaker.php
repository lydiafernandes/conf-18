<?php
//session_start();
?>
<!DOCTYPE html>
<HTML>
    <head>
        <title> Invited Speakers </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 


</head>
<body> 
    <!-- includee the nav bar -->
<?php include("includes/navigation1.php");?>
<!-- -------------------------------- -->
<!--- Invited Speakers -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"><a name="top">Our Esteemed Invited Speakers </a></h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div  class="container-fluid padding">
	<div class="row padding">

		<!-- FIRST CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/Ramesh_Goyal.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Ramesh K. Goyal </h4>
					<p class="card-text"> Member of Task Force, Committee for Herbal Group, 
					Indian Council of Medical research ,Member,
					 Indian Pharmacopoeia Commission, CDSCO, Govt. of India.

                    </p>
					<a href="goyal.php" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- SECOND CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Daniel_Wilson_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Daniel R. Wilson, M.D., Ph.D. </h4>
					<p class="card-text"> A pioneer in Evolutionary Neuroscience, Currently he is the President of Western University of Health Sciences, Pomona, California USA.</p>
					<a href="wilson.php" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- THIRD CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Luis_Lima_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Melchior Luiz Lima M.D. MSc. Ph.D. </h4>
					<p class="card-text"> A Professor of Cardiovascular Institute “São Francisco de Assis”
					and Cardiovascular Surgeon, Center of Cardiovascular Surgery &amp; Heart
				    Transplantation, Meridional Hospital, Cariacica, ES, Brazil. </p>
					<a href="lima.php" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

	</div>
	<div class="row padding">

		<!-- ROW 2-FIRST CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Praveen_Vemula_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Praveen Vemula Ph.D.</h4>
					<p class="card-text"> Faculty at the Institute for Stem Cell Biology and Regenerative Medicine(inStem), Bangalore, India.</p>
					<a href="vemula.php" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- ROW 2 - SECOND CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Subburaman_Mohan_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Subburaman Mohan. </h4>
					<p class="card-text"> Senior Research Career Scientist, Veterans Administration (VA). Director, Musculoskeletal Disease Center, VA Loma Linda, California</p>
					<a href="#mohan" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!--ROW 2- THIRD CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Alex_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Alex C Varghese </h4>
					<p class="card-text"> Scientific  Director <br>
                                           ASTRA Fertility Group,<br>
                                           <b>Web:</b> 
                                           <a href="www.lifeinvitro.com"> www.lifeinvitro.com</a>

                    </p>
					<a href="#alex" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

	</div>

<!--------------------- row 3 begins ------------ -->
<div class="row padding">

		<!-- ROW 3-FIRST CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Sorab_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Sorab Nariman Dalal.</h4>
					<p class="card-text"> Scientific Officer ‘G’, Associate Professor - HBNI, Tata Memorial Centre</p>
					<a href="#sorab" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- ROW 3 - SECOND CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Renjith_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Renjith P Nair, PhD </h4>
					<p class="card-text"> Lecturer in molecular oncology, Malabar Cancer Centre, Thalassery, India</p>
					<a href="#renjith" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!--ROW 3- THIRD CARD APPEARS HERE -->
		
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Rajmohan_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Rajmohan V.</h4>
					<p class="card-text"> Asst. Professor with a Bachelors in Ayurvedic Medicine and Surgery (BAMS) 
					and Doctor of Medicine (MD) in Ayurveda from Government Ayurveda College</p>
					<a href="rajmohan.php" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

	</div>
</div>
<hr>

<!-- ------------------------------------------------- -->

<!-- -----------------got ------------------------------- -->

<!--------------------------------------------------- --> 
<div class="container">
    <h1> <a name="vemula">Dr. Praveen </a>Vemula Ph.D.</h1>
    <p class="card-text" style="text-align:justify">
    <pre>
Faculty, Institute for Stem Cell Biology and Regenerative Medicine(inStem),
Bangalore, India.
    </pre>
    After obtaining Ph.D. from Indian Institute of Science in 2005, he
received postdoctoral training at The City College of New York and Harvard–MIT Division of
Health Sciences and Technology at Harvard Medical School in affiliation with Brigham and
Women’s Hospital. In 2009, the Ewing Marion Kauffman Foundation selected him as an
entrepreneur fellow through whom he received formal training in translational research and
entrepreneurship. <br><br>
Dr. Vemula is interested in the fields of biomaterials and chemical biology programs. In
biomaterials, he is interested in drug delivery and gene delivery; in chemical biology he is
interested in small molecular drug discovery. Overall he is intersted translation science. He has
published >60 peer-reviewed papers and has given 80 national and international invited lectures
and has 20 issued or pending patents. Several technologies developed by his team have formed
the foundation for multiple products on the market. Based on the technologies he developed, two
biotech companies were formed, Skintifique and Alivio Therapeutics. Two more startups are being
formed.<br><br>
Vemula’s work has been discussed in hundreds of newspapers, online websites, television
newscasts, and radio shows around the world including The New York Times, CNN, ABC News,
NBC, Boston Globe, LA Times, BBC, Discovery, National Geographic, The Hindu, The Times of
India, Deccan Herald and many more.
<a href="#top" class="btn btn-outline-secondary">Top</a>
</p>


</div>

<hr>
<!--------------------------------------------------- --> 
<div class="container">
    <h1> <a name="mohan">Subburaman </a> Mohan Ph.D.</h1>
    <p class="card-text" style="text-align:justify">
    <pre>
	Senior Research Career Scientist at the Veterans Administration (VA),
	Director of the Musculoskeletal Disease Center at the VA Loma Linda Healthcare Systems,
	Professor of Medicine, Orthopedics and Biochemistry at Loma Linda University, California
    </pre>
	Dr. Subburaman Mohan, Ph.D., is a well-established scientist in skeletal biology research with an international reputation and has published nearly 400 papers
	in scientific journals with high impact factors.  
	Dr. Mohan’s research interests during the past three decades have focused on the discovery of novel genes and evaluation of the functions of genes that are relevant
	 to the acquisition, maintenance, and loss of bone and cartilage using various molecular genetics and biochemical approaches.   Dr. Mohan has made seminal contributions
	  to the field of growth hormone/insulin-like growth factor (IGF) actions on bone. He discovered of two novel IGF binding proteins and elucidated their role in the musculoskeletal
	   system. His current research funded by VA and NIH is centered around genetic regulation of peak bone mass, molecular pathways for thyroid hormone and hypoxia signaling in
	    endochondral ossification, epigenetic mechanisms of vitamin C deficiency-induced skeletal fractures and long-term consequences 
	of mild traumatic brain injury on bone.  Dr. Mohan is a well funded investigator and is a recipient of a number of professional awards.  
	He has been a member or is a current member of the Editorial Board of several scientific journals, scientific organizing committees, and grant review panels.  
	<a href="#top" class="btn btn-outline-secondary">Top</a>
</p>


</div>
<hr>
<!--------------------------------------------------- --> 
<div class="container">
    <h1> <a name="alex">Dr. Alex </a>C Varghese Ph.D.</h1>
    <p class="card-text" style="text-align:justify">
    <pre>
    Scientific  Director
    ASTRA Fertility Group
    4303 Village Centre Crt.
    Mississauga, ON
    L4Z 1S2, Canada
    tel: 905.949.6999
    Email: alexcv2008@gmail.com
    Web:<a href="http://www.lifeinvitro.com/"> www.lifeinvitro.com</a>
    </pre>
    Alex C Varghese is presently the Scientific Director, Astra Fertility Group of IVF Centre at Mississauga, Ontario, Canada and also hold the position of Laboratory Director at CRAFT Hospital and research centre, Kerala, India.  He received his PhD in Biochemistry from University of Calcutta, India for his thesis based on ART. He was a Post Doctoral Research Fellow  at the Center for Reproductive Medicine, Cleveland Clinic Foundation, USA. He is active in clinical embryology since 1997 and has initiated many successful training programs in ART and helped in designing and setting up of many IVF units in rural and urban India and neighboring countries. In the year 2010 he founded the educational web platform for IVF professionals- www.lifeinvitro.com which is now popular in 165 countries. Alex has authored over 30 manuscripts and edited 8 books in assisted reproduction, including the popular and bestselling “Practical Manual of in vitro fertilization: Advanced methods and novel devices”. Alex’s research interests are in assisted reproductive technology, in particular, in understanding the molecular and environmental causes and prevention of male infertility, probiotics in fertility, microbiome in health and disease associated with reproduction and developing stress-free, automated embryo culture systems for In Vitro Fertilization. 
<br><br>He is an executive committee member of special group in Andrology of Canadian Fertility
 and Andrology Society (CFAS) and Chairman-Scientific Committee of 7th International
  Congress of Academy of Clinical embryologists, Goa, India (www.acegoa2018.com)
  <a href="#top" class="btn btn-outline-secondary">Top</a>
</p>


</div>
<hr>
<!--------------------------------------------------- --> 
<div class="container">
    <h1> <a name="sorab"> </a> Dr. Sorab Nariman Dalal.</h1>
    <p class="card-text" style="text-align:justify">
    <pre>
	Designation: Scientific Officer ‘G’, Associate Professor - HBNI
	Department: Sorab’s laboratory, ACTREC, Tata Memorial Centre
    </pre>
	<strong> Awards and Honors: </strong><br>
He has been a research fellow of the Leukemia Society of America from July 1997 to July 2000. 
Joint Secretary Indian Association of Cancer Research April 2009 to March 2012
Secretary Indian Association of Cancer Research April 2012 to 2014
Editor Journal of Biosciences from 2011, Current Science from 2018
Member of the Task Force on Cancer Biology from 2012-2014
DAE SRC Outstanding Scientist Award 2015
<a href="#top" class="btn btn-outline-secondary">Top</a>
</p>


</div>

<!-- -------------------------------------------------->
<hr>
<!--------------------------------------------------- --> 
<div class="container">
    <h1> <a name="renjith"> </a> Dr. Renjtih P Nair</h1>
    <p class="card-text" style="text-align:justify">
    <pre>
	Designation: Lecturer in molecular oncology, Malabar Cancer Centre, Thalassery, India.
    </pre>
	<strong>Awards and Honors:</strong><br>
	Dr. Renjith, is involved in the molecular diagnosis of different cancer types.
	 He is a recipient of several awards and fellowships from KSCSTE, CSIR, ICMR and JNCASR.
	 His areas of research are personalized therapy, tissue engineering, gene therapy, 
	 protein engineering, drug repurposing and molecular oncology. He had several publications
	 in peer reviewed high impact international journals. He delivered several invited talks 
	 in national and international conferences. He is a reviewer of several international 
	 journals including RSC Advances, Artificial Organs, Biomedical Materials
	 and Journal of Applied polymer Science. 
<a href="#top" class="btn btn-outline-secondary">Top</a>
</p>


</div>

<!-- -------------------------------------------------->
<!-- -------------------------------------------------->

<!--- Connect-->
<?php include("includes/footer.php");?>

</body>
</html>