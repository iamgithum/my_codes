
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style type=text/css rel=spreadsheet>
    input{
        border-radius:3px;
        padding:3px;
        border-color:#6495ed;
        margin-left: 6px;
    }
    button{
        background-color: #ff7a3d;
        align: left;
        color:#fcfcfc;
        margin-top:9px;
        margin-left: 450px;*/
    }
</style>
    <form name="testLeadForm" id="testLeadForm" role="form">
        <center>
            <font color="#ff7a3d">Enquiry Form</font>
        </center>
        <fieldset>
          <table>
            <tr>
            <div class="form-group input-group">
                <td><span class="input-group-addon">Name</span></td><td>
                <input class="form-control" name="name" id="name" placeholder="Name" maxlength="50" required></td>
            </div>
  </tr><tr>
            <div class="form-group input-group">
            <td>    <span class="input-group-addon">Email</span></td><td>
                <input class="form-control" name="email" id="email" placeholder="Email Id" maxlength="50" required></td>
            </div>
            </tr><tr>
            <div class="form-group input-group">
             <td>   <span class="input-group-addon">Mobile</span></td><td>
                <input class="form-control" name="mobile" id="mobile" placeholder="Mobile" maxlength="50" required></td>
            </div>
            </tr><tr>
            <div class="form-group input-group">
             <td>   <span class="input-group-addon">Course</span></td><td>
                <input class="form-control" name="course" id="course" placeholder="Course" maxlength="50" required></td>
            </div>
            </tr><tr>
            <div class="form-group input-group">
               <td> <span class="input-group-addon">Location</span></td><td>
                <input class="form-control" name="location" id="location" placeholder="Location" maxlength="50" required></td>
            </div>
            </tr><tr>
            <div class="form-group input-group">
              <td colspan=2>
                <span class="input-group-addon">Message</span><br>
                <textarea rows = "5" name = "message">
                    Optional message
                 </textarea></td>
            </div>
          </tr><tr>
            <div class="form-group" align="center">
                <td colspan=2><button  type="submit" class="login-btn-prop btn btn-primary" id="loginBtn" name="loginBtn">
                    Submit
                </button></td>
            </div>
            </tr>
  </table>
        </fieldset>
    </form>

<script>
    $(document).ready(function () {
        $("#testLeadForm").submit(function (event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'https://conceptninjas.com/services/web/syncLead/eUxhd25EQ3hMNXVmSWw2bkpVNFZXUT09',
                data: $( "#testLeadForm" ).serialize()
            }).done(function (data) {
                console.log(data);
                window.location.href = 'https://santhoshtechnologies.in';
            });
        });
    });
</script>
