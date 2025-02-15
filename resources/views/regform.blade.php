<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IEEE HSB</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reg.css')}}">
</head>
<body>

    <div class="container-fluid reg-bg">

    </div>

    <div class="container mt-3">
        <!-- Material form contact -->
    <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>    IEEE Helwan Student Branch Volunteers Recruitment
    </strong>
    </h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" method='post' style="color: #757575;" action="/ieee-20/volunteers/reg">
        
        <!-- Name -->
        <div class="md-form mt-3">
            <input type="text" id="materialContactFormName" class="form-control" name='name' required>
            <label for="materialContactFormName">Full Name</label>
        </div>

        <!-- E-mail -->
        <div class="md-form">
            <input type="email" id="materialContactFormEName" class="form-control" name='mail' required>
            <label for="materialContactFormEmail">E-mail</label>
        </div>
        <div class="md-form">
            <input type="number" id="materialContactFormName2" class="form-control" name='phone' required>
            <label for="materialContactFormEmail2">Phone</label>
        </div>
        <div class="md-form">
            <input type="text" id="materialContactFormEName3" class="form-control" name='university' required>
            <label for="materialContactFormEmail3">University</label>
        </div>
        <div class="md-form">
            <input type="text" id="materialContactFormEmail4" class="form-control" name='major' required>
            <label for="materialContactFormEmail4">Major</label>
        </div>

        <!-- Subject -->
        <div class="md-form">
            <select class="browser-default custom-select" name='acyear[]' required>
                <option selected disabled>Academic Year</option>
                <option value="prep">Prep</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="forth">Forth</option>
            </select>        
        </div>
        <div class="md-form">
            <select class="browser-default custom-select" name='committee[]' required>
                <option selected disabled>Choose Committee</option>
                <option value="Social Media">Social Media</option>
                <option value="Media">Media</option>
                <option value="HR-TM">HR-TM</option>
                <option value="HR-OD">HR-OD</option>
                <option value="PR">PR</option>
                <option value="Academic">Academic</option>
                <option value="IT">IT & Web Development</option>
                <option value="Magazine">Magazine And Membership</option>
                <option value="Logistics">Logistics</option>
                <option value="FR">FR</option>
                <option value="Decoration">Decoration</option>
                <option value="TS PES">Technical Support PES</option>
                <option value="TS RAS">Technical Support RAS</option>
                <option value="WIE">WIE</option>
            </select>        
        </div>
         
        <small id="materialRegisterFormPasswordHelpBlock" class="text-left form-text text-muted mt-3">
                    For RAS Technical Support Applicant*</small>
        <small id="materialRegisterFormPasswordHelpBlock" class="text-left form-text text-muted">
                    What Experience You Have In This Majors*</small>


        <div class="form-check text-left">
        <input type="radio" class="form-check-input" id="materialGroupExample1" name="ras" value='Control'>
        <label class="form-check-label" for="materialGroupExample1">Control</label>
        </div>

        <div class="form-check text-left">
        <input type="radio" class="form-check-input" id="materialGroupExample2" name="ras" value='Mechanical'>
        <label class="form-check-label" for="materialGroupExample2">Mechanical</label>
        </div>

        <div class="form-check text-left">
        <input type="radio" class="form-check-input" id="materialGroupExample3" name="ras" value='Both Control&Mecha'>
        <label class="form-check-label" for="materialGroupExample3">Both</label>
        </div>
        <div class="form-check text-left">
        <input type="radio" class="form-check-input" id="materialGroupExample4" name="ras" value='none' checked>
        <label class="form-check-label" for="materialGroupExample4">None</label>
        </div>

        <div class="md-form">
            <input type="text" id="materialContactFormName1" class="form-control" name='exp' required>
            <label for="materialContactFormName1">Did you join any student activity before?</label>
            <small id="materialRegisterFormPasswordHelpBlock" class="text-left form-text text-muted mb-4 mt-3">
                    If Yes Mention It`s Name And Your Role*</small>

        </div>
        <div class="md-form">
            <input type="text" id="materialContactFormEmail5" class="form-control" name='wjoin' required>
            <label for="materialContactFormEmail5">Why You Applying For Our branch ?</label>
        </div>
        <div class="md-form">
            <input type="text" id="materialContactFormEmail6" class="form-control" name='facebook'>
            <label for="materialContactFormEmail6">Facebook Link</label>
            <small id="materialRegisterFormPasswordHelpBlock" class="text-left form-text text-muted mb-4">
                    Optional*</small>

        </div>
        <div class="md-form">
            <input type="text" id="materialContactFormMessage1" name='comments' class="form-control" required>
            <label for="materialContactFormMessage1">Your Skills</label>
        </div>

        <!--Message-->
        <div class="md-form">
            <input type="text" id="materialContactFormMessage" class="form-control">
            <label for="materialContactFormMessage">Comments</label>
        </div>

        <!-- Send button -->
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

    </form>
    <!-- Form -->

</div>

</div>
    </div>


<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script src="{{ asset('js/reg.js') }}"></script>

</body>
</html>