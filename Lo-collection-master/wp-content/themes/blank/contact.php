<?php
	/* Template Name: Contact*/

	get_header();
?>


<html>
    
    <body>

    <style type="text/css">
        .wrapper {
         margin: auto;
         vertical-align: right ;
         background: rgba(91,45,16,1);
         padding: 10px;
         width: 900px; 
         padding: 20px;
         border-radius: 50px;
         justify-content: flex-end;
        display: flex;
        align-items: right;

        }

        .mess{
         height: 150px;
         width: 300px;
         }
        .try{
        margin-right: auto;
        margin-top: 100px;
        }

        .contact {
        text-align: center;
        font-family: Geometry;
        font-size: 20px;
        padding: 1px 0%;
        display: center;
        justify-content: flex-start;
        margin-right: auto;
        
        }

        .sec{
            color:white;
        }
        
    </style>

       <form id="contact-form" method="post" action="" role="form">


  <div class="wrapper" >

    <ul class="try">
            <h2 class="contact sec">Contact Us</h2>
            <p class="contact sec"> 69, Bacoor, 4102 Cavite, Philippines</p> 
            <p class="contact sec"> jayperson.babaran@cvsu.edu.ph</p>
            <p class="contact sec"> 09489576571</p>
        </ul>
    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name"  class="sec">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"  class="sec">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email"  class="sec">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need"  class="sec">Number *</label>
                    <input id="form_need" type="text" name="need" class="form-control" placeholder="Please enter your number *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message"  class="sec">Message *</label>
                    <textarea id="form_message" name="message" class="mess" placeholder="Let us hear your concerns/questions. *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="reset" onclick="hello();" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> Thank you! </p>
            </div>
        </div>
    </div>

</form>

</div>
    </body>
</html>

<script type="application/javascript">

function hello()
{
  alert("Message sent successfully! We'll respond to you ASAP, Thank you!");
}
</script>

<?php
 get_footer();
?>