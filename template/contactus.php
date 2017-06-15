<form id="contact-form" method="POST" action="contactus_send.php">
<p><center>You could send email to user or academic stuff and also contact admin (exchaningbooks@gmail.com).</center></p>
<p><br/></p>
                        <div class="row form-group">
                          <div class="col-xs-6">
                            <input type="text" name="name" placeholder="Subject" id="contact-name" class="form-control" required="required">
                          </div>
                          <div class="col-xs-6">
                            <input type="email" name="email" placeholder="TO" id="contact-email" class="form-control " required="required">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" rows="4" placeholder="Your Message" id="contact-message" class="form-control " required="required"></textarea>
                          </div>
                        </div>
                        <button type="submit" onclick="send()" id="sendbtn" class="btn btn-style blue" style="float:left ; margin-right:20px;" >Send</button>
                       <span class="form-message" style="display: none;"></span>
                      </form>

<script>
//$(document).ready(function(){
function send(){
if (($('#contact-message').val() !='') & ($('#contact-email').val()!='') && ($('#contact-name').val()!=''))
{
		var form = document.getElementById("contact-form");
  document.getElementById("sendbtn").addEventListener("click", function () {
  form.submit();
});
}
}
//});

</script>