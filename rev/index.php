<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php ?>
        <meta charset="UTF-8">
        <title>Review Form</title>
        <link rel="stylesheet" href="rev.css">
          <script type="text/javascript">
    function updateTextInput(val) {
        var ch;
        switch(val)
        {
            case '1' :
                ch = 'Too Short';
                break;
            case '2' :
                ch = 'Short';
                break;
            case '3' : 
                ch = 'Fits';
                break;
            case '4' :
                ch = 'Long';
                break;
            case '5' : 
                ch = 'Too Long';
                break;
        }
      document.getElementById('textInput').innerHTML=ch; 
    }
  </script>
    </head>
    <body>
        <form name="Review">
           
            
             <fieldset name="ratings">
                <h3>Choose your product ratings</h3>
                <p> <label >Do you recommend this product?</label><br>
                <input type="radio" name="recommend" value="Yes">Yes<br>
                <input type="radio" name="recommend" value="No">No</p>
            </fieldset>
            
            <fieldset name="Review">
                
            <h3>Leave your Reviews</h3>
            <p> <label name="rsum">Review Summary</label> 
                <input type="text" name="rsum"><br></p>
            
            <p> <label name="review">Your Review</label><br>
                <textarea name="review" cols="10" rows="6"></textarea></p>
            <p class="tainstruct">Your review must be atleast 50 characters</p>
            
            <div class="guidelines">
                    <h4>Writing Guidelines</h4>
                    <p>We want to publish your review, so please:</p>
                    <ul>
                        <li>Keep your review focused on the product</li>
                        <li>Avoid writing about customer service;contact us instead if you have issues requiring immediate attention</li>
                        <li>Refrain from mentioning competitors or the specific price you paid for the product</li>
                        <li>Do not include any personally identifiable information, such as full names</li>
                    </ul>
            </div>
            </fieldset>
           
            <fieldset name="media">
                <h3>Optional: Share relevant photos and video</h3>
                
                <div class="guidelines">
                    <h4>Media Guidelines</h4>
                    <p>We want to publish your review, so please:</p>
                    <ul>
                        <li>Upload media related to the product.</li>
                        <li>Confirm you hold the copyright for the media.</li>
                        <li>Images must be atleast 533 in width and height.</li>
                    </ul>
            </div>
            </fieldset>
            
            <fieldset name="relatedproducts">
                <h3>Include related products</h3>
                <button>Add Product</button>
            </fieldset>
            
            <fieldset name="userinfo" >
                <h3>Your information</h3>
                <p>  <label name="uname">Your Name</label><br>
                    <input name="uname" type="text"></p>
                
                <p><label name="ucity">Your city</label><br>
                    <input name="ucity" type="text"></p>
                
                <p> <label name="ucountry">Your country</label><br>
                    <input name="ucountry" type="text"></p>
                
                <p>  <label name="age" >How old are you?</label><br>
                <select name="age">
                    <option value=""></option>
                    <option value="under18">Under 18</option>
                    <option value="18-24">18-24</option>
                    <option value="25-34">25-34</option>
                    <option value="35-44">35-44</option>
                    <option value="45-54">45-54</option>
                    <option value="55-64">55-64</option>
                    <option value="over65">Over 65</option>
                </select></p>
                
                
                <p><label name="rider">What type of rider are you?</label><br>
                    <select name="rider">
                        <option value=""></option>
                        <option value="adventurer">Adventurer</option>
                        <option value="kneedragger">Kneedragger</option>
                        <option value="dirtmaven">Dirt Maven</option>
                    </select></p>
                    
                <p><label name="gender">What is your gender?</label><br>
                <ul class="inline">
                    <li>
                <input type="radio" name="gender" value="Male">Male
                    </li>
                    <li>
                <input type="radio" name="gender" value="Female">Female
                    </li>
                </ul> 
                </p>
                <p><input type="checkbox" name="email" value="post">Please send me an email when my review is posted<br>
                <input type="checkbox" name="email" value="comment">Please send me an email when someone comments on my review<br>
                <label name="email">Your email address</label><br>
                <input type="email" name="email"></p>
                
            </fieldset>
            
            <fieldset name="feedback">
                <h3>Additional feedback to the customer service</h3>
                <p><label name="crecom">Would you recommend BIKEFIXR to a friend?</label><br>
                    <input type="radio" name="crecom" value="no"> No
                    <input type="radio" name="crecom" value="maybe"> Maybe
                    <input type="radio" name="crecom" value="definitely"> Definitely
                </p>
                <p><label name="why">Please tell us why?</label><br>
                    <textarea name="why" rows="5" cols="100"></textarea>
                </p>
                <p><input type="range" name="rangeInput" id="ran" max="5" min="1" step="1" oninput="updateTextInput(this.value);"><label id="textInput">Choose a value</label></p>
                
                
            </fieldset>
            <p><button >Preview</button></p>
            <p><button>Cancel</button></p>
        </form>
        
        <script src="rev.js"></script>
    </body>
</html>
