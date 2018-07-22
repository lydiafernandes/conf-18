<?php
session_start();
//inlcude 'session.php';
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
<?php include("includes/navigation.php");?>
<!-- -------------------------------- -->
<!--- Invited Speakers -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Our Esteemed Invited Speakers </h1>
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
				<img class="card-img-top" src="img/speakersnewdimensions/Rajmohan_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Rajmohan V.</h4>
					<p class="card-text"> Asst. Professor with a Bachelors in Ayurvedic Medicine and Surgery (BAMS) 
					and Doctor of Medicine (MD) in Ayurveda from Government Ayurveda College</p>
					<a href="#rajmohan" class="btn btn-outline-secondary">See Profile</a>
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
					<a href="#wilson" class="btn btn-outline-secondary">See Profile</a>
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
					<a href="#lima" class="btn btn-outline-secondary">See Profile</a>
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
					<a href="#vemula" class="btn btn-outline-secondary">See Profile</a>
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
					<h4 class="card-title"> Prof. Sorab Nariman Dalal.</h4>
					<p class="card-text"> Scientific Officer ‘G’, Associate Professor - HBNI, Tata Memorial Centre</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- ROW 3 - SECOND CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Renjith_New.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Renjith P Nair, PhD </h4>
					<p class="card-text"> ecturer in molecular oncology, Malabar Cancer Centre, Thalassery, India</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!--ROW 3- THIRD CARD APPEARS HERE -->
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
</div>
<hr>
<div class="container">
    <h1> <a name="rajmohan">Dr. Rajmohan V. </a></h1>
    <p class="card-text para-justify">
    <pre>
    Assistant Professor,				            TC 19/1807(22) “Devi Darsanam”
    Government Ayurveda College, 		                   Kesavan Nair Road, Poojappura,
    Pariyaram, Kannur 67050		                           Thiruvananthapuram,Kerala 695012
   <!-- 
    tel: 
    Email: 
    Web:<a href="#">?</a>  -->
    </pre>
    Having completed his Bachelors in Ayurvedic Medicine and Surgery (BAMS) and Doctor of Medicine (MD) in Ayurveda from Government Ayurveda College, Thiruvananthapuram under the University of Kerala.   He has started his carrier as medical officer in the 
	Department of Indian Systems of Medicine under of the Government of Kerala and was deputed as Research Officer in the Drug Standardization 
	Unit under the Department of Ayurveda Medical Education of Government of Kerala.He has started his carrier as medical officer in the Department of Indian Systems of Medicine under of the Government of Kerala and was deputed as Research Officer in the Drug Standardization Unit under the Department of Ayurveda Medical Education of Government of Kerala.
    He has started his carrier as medical officer in the Department of Indian Systems of Medicine under of the Government of Kerala and was deputed as Research Officer in the Drug Standardization Unit under the Department of Ayurveda Medical Education of Government of Kerala.  His teaching carrier started at Vaidyaratnam P S Varier Ayurveda College, Kottakkal and later continued to Government Ayurveda College, Thiruvananthapuram and since January 2018, to the current institution.  He was the faculty of Research Methodology at Government Ayurveda College, Thiruvananthapuram and Subject expert of research methodology at Kerala University of Health Sciences (KUHS).   Currently he is acting as a resource person to UGC – Human Resource Development Centre, University of Calicut and technical committee member of School of Ayurveda and School of Health Policy and Planning of KUHS.  He has acted as a member of the committee for the preparation of perspective plan for KUHS and was an active member in the committee for developing a vision document for the functioning of KUHS.  He has actively Participated in the Conceptualization and Project Development Workshop for High Impact Projects (HIP) in Ayurveda, organized by FRLHT - Institute of Ayurveda and Integrative Medicine (I-AIM), for the Dept. of AYUSH, Govt. of India, held at the School of Ancient Wisdom, Bangalore from 21st to 23rd may, 2010 and was a national level coordinator for one of the projects.  He has been a resource person to various International and National seminar and conferences since 2007 and has 13 publications to his credit.  He is awarded with SKM Research Scholar 2010 Award by SKM Centre for AYUSH System Research and Education, Erode – A National Level award for outstanding contribution to Research Methodologies in Ayurveda.  He is a teacher, clinician and researcher currently researching on the interface of ageing, Rasayana (ayurvedic drugs for ageing and degeneration) 
	and cancer through interdisciplinary and multidisciplinary approaches. 
</p>


</div>
<hr>
<!-- ------------------------------------------------- -->
<div class="container">
    <h1> <a name="wilson">President Daniel R. Wilson, MD, PhD </a></h1>
    <p class="card-text" style="text-align:justify">
    <pre>
    Western University of Health Sciences, Pomona, California USA
   <!-- tel: 
    Email: 
    Web:<a href="#">?</a> -->
    </pre>
    Having completed his Bachelors in Ayurvedic Medicine and Surgery (BAMS) and Doctor of Medicine (MD) in Ayurveda from Government Ayurveda College, Thiruvananthapuram under the University of Kerala.   He has started his carrier as medical officer in the 
	Department of Indian Systems of Medicine under of the Government of Kerala and was deputed as Research Officer in the Drug Standardization 
	Unit under the Department of Ayurveda Medical Education of Government of Kerala.He has started his carrier as medical officer in the Department of Indian Systems of Medicine under of the Government of Kerala and was deputed as Research Officer in the Drug Standardization Unit under the Department of Ayurveda Medical Education of Government of Kerala.
    He has started his carrier as medical officer in the Department of Indian Systems of Medicine under of the Government of Kerala and was deputed as Research Officer in the Drug Standardization Unit under the Department of Ayurveda Medical Education of Government of Kerala.  His teaching carrier started at Vaidyaratnam P S Varier Ayurveda College, Kottakkal and later continued to Government Ayurveda College, Thiruvananthapuram and since January 2018, to the current institution.  He was the faculty of Research Methodology at Government Ayurveda College, Thiruvananthapuram and Subject expert of research methodology at Kerala University of Health Sciences (KUHS).   Currently he is acting as a resource person to UGC – Human Resource Development Centre, University of Calicut and technical committee member of School of Ayurveda and School of Health Policy and Planning of KUHS.  He has acted as a member of the committee for the preparation of perspective plan for KUHS and was an active member in the committee for developing a vision document for the functioning of KUHS.  He has actively Participated in the Conceptualization and Project Development Workshop for High Impact Projects (HIP) in Ayurveda, organized by FRLHT - Institute of Ayurveda and Integrative Medicine (I-AIM), for the Dept. of AYUSH, Govt. of India, held at the School of Ancient Wisdom, Bangalore from 21st to 23rd may, 2010 and was a national level coordinator for one of the projects.  He has been a resource person to various International and National seminar and conferences since 2007 and has 13 publications to his credit.  He is awarded with SKM Research Scholar 2010 Award by SKM Centre for AYUSH System Research and Education, Erode – A National Level award for outstanding contribution to Research Methodologies in Ayurveda.  He is a teacher, clinician and researcher currently researching on the interface of ageing, Rasayana (ayurvedic drugs for ageing and degeneration) 
	and cancer through interdisciplinary and multidisciplinary approaches. 
</p>

</div>
<!-- -----------------got ------------------------------- -->
<hr> 
<div class="container">
    <h1> <a name="lima">Dr. Melchior Luiz Lima M.D. MSc. Ph.D. </a></h1>
    <p class="card-text para-justify">
    <pre>
         Professor of Cardiovascular Institute “São Francisco de Assis”. 
	Cardiovascular Surgeon, Center of Cardiovascular Surgery &amp; Heart Transplantation, Meridional Hospital, 
	Cariacica, ES, Brazil. 
	Titular Member &amp; Member of the Deliberative Council of the Brazilian Society of Cardiovascular Surgery.
	Philosophy Doctor - Federal University of São Paulo, Brazil (2015). 
	Philosophy Doctor - Cardiovascular Institute  “São Francisco de Assis”, Belo Horizonte, MG, Brazil (2011). 
 </pre>
 <hr>
Philosophy Doctor - Cardiovascular Institute  “São Francisco de Assis”, Belo Horizonte, MG, Brazil (2011).  
Master of Science - Cardiovascular Institute “São Francisco de Assis”, Belo Horizonte, MG, Brazil (2010). 
Post-Graduation (Medical Residency) - “Real and Benemérita Sociedade Portuguesa de Beneficência”, São Joaquim Hospital, São Paulo, SP, Brazil (1991). 
Graduation (Medicine) - School of Sciences of “Santa Casa de Misericórdia de Vitória”, Vitória, ES, Brazil (1988).
Cardiovascular Surgeon research program collaborator of the Department of Physiological Sciences, Federal University of “Espírito Santo”, Vitoria, ES, Brazil. Researcher on vascular reactivity, myocardial protection and dysfunction of cardiac mitochondrial subpopulations in heart failure.
</p>
</div>
<hr>
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
    Web:<a href="www.lifeinvitro.com"> www.lifeinvitro.com</a>
    </pre>
    Alex C Varghese is presently the Scientific Director, Astra Fertility Group of IVF Centre at Mississauga, Ontario, Canada and also hold the position of Laboratory Director at CRAFT Hospital and research centre, Kerala, India.  He received his PhD in Biochemistry from University of Calcutta, India for his thesis based on ART. He was a Post Doctoral Research Fellow  at the Center for Reproductive Medicine, Cleveland Clinic Foundation, USA. He is active in clinical embryology since 1997 and has initiated many successful training programs in ART and helped in designing and setting up of many IVF units in rural and urban India and neighboring countries. In the year 2010 he founded the educational web platform for IVF professionals- www.lifeinvitro.com which is now popular in 165 countries. Alex has authored over 30 manuscripts and edited 8 books in assisted reproduction, including the popular and bestselling “Practical Manual of in vitro fertilization: Advanced methods and novel devices”. Alex’s research interests are in assisted reproductive technology, in particular, in understanding the molecular and environmental causes and prevention of male infertility, probiotics in fertility, microbiome in health and disease associated with reproduction and developing stress-free, automated embryo culture systems for In Vitro Fertilization. 
<br><br>He is an executive committee member of special group in Andrology of Canadian Fertility
 and Andrology Society (CFAS) and Chairman-Scientific Committee of 7th International
  Congress of Academy of Clinical embryologists, Goa, India (www.acegoa2018.com)
</p>


</div>
<!-- ------------------------------------------------  -->
<!--- Connect -->
<?php include("includes/footer.php");?>

</body>
</html>