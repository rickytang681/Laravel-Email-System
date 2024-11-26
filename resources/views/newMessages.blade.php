<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/newMessage.css"> <!-- Assuming your CSS file is in the "public/css" directory -->
</head>
<body>
   
    @include('layouts.app') 
    <div class="container">
         
        <form id='form' action='newMessages' method='post'>
            @csrf <!-- CSRF token for security -->
           
            <div class="row">
                <div class="col-25">
                    <label for="email">Recipient's Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="getEmail" placeholder="Recipient's Email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="header">Header</label>
                </div>
                <div class="col-75">
                    <input type="text" id="header" name="getHeader" placeholder="Email Header" required>
                </div>
            </div>  
            <div class="row">
                <div class="col-25">
                    <label for="content">Content</label>
                </div>
                <div class="col-75">
                    <textarea id="content" name="getContent" placeholder="Email Content" style="height:200px" required></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Send Email">
            </div>
        </form>
    </div>
</body>
</html>