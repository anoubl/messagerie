
<?php

if(isset($_GET['var']))
{
  $var=$_GET['var'];
  if($var=="true")
  {
    echo "
    <div class='container' id='success-alert'>
    <script>
       window.alert('ThankYou !!!!!');
    </script>
</div>

    ";
    
  }
  else
  {
    echo "
    <div class='container' id='success-alert'>
    <script>
       window.alert('again');
    </script>
</div>

    ";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
   
   
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4"
          >
            <h1 class="mb-3 text-center">Create a new account</h1>
            <p class="lead">
              It's free and you don't have to share your address.
            </p>
            <form method="POST" action="../controller/sign.php" class="mb-3">
              <div class="row">
                <div class="form-group col-12 col-sm-6">
                  <label for="firstName">First name:</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    id="firstName"
                    name="fname"
                  />
                </div>
                <div class="form-group col-12 col-sm-6">
                  <label for="lastName">Last name:</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    id="lastName"
                    name="lname"

                  />
                </div>

              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="example@example.com"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <label>Birthday:</label>
              <br>
              <div class="row no-gutters">
              <table class="table">
                <td>
                <div class="form-group col-4">
                  <label for="birthdayDay" class="sr-only">Birthday day</label>
                  <select name="jour" class="form-control" id="birthdayDay">
                    <option value="">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
                </td>
                <td>
                <div class="form-group col-4">
                  <label for="birthdayMonth" class="sr-only"
                    >Birthday month</label
                  >
                  <select name="mois" class="form-control" id="birthdayMonth">
                    <option value="">Month</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                  </select>
                </div>
                </td>
                <td>

                <div class="form-group col-4">
                  <label for="birthdayYear" class="sr-only"
                    >Birthday year</label
                  >
                  <br>
                  <select name="anne" class="form-control" id="birthdayYear">
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>

                  </select>
                </div>
                </td>

              </table>
             
               
                <br>
                
                
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios1"
                    class="form-check-input"
                    value="Man"
                    checked
                  />
                  Man
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios2"
                    class="form-check-input"
                    value="Woman"
                  />
                  Woman
                </label>
              </div>


   <br>
   <br>



              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input
                    type="radio"
                    name="exampleRadios1"
                    id="exampleRadios1"
                    class="form-check-input"
                    value="Single"
                    checked
                  />
                  Single
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input
                    type="radio"
                    name="exampleRadios1"
                    id="exampleRadios2"
                    class="form-check-input"
                    value="married"
                  />
                  married
                </label>
              </div>


              <button type="submit" name="sign" class="btn btn-primary btn-block mb-3">
                Create account
              </button>
              <div class="alert alert-info small" role="alert">
                By clicking above you agree to our
                <a href="#" class="alert-link">Terms &amp; Conditions</a> and
                our <a href="#" class="alert-link">Privacy Policy</a>.
              </div>
              <div class="text-center">
                <p>or ...</p>
                <a href="../index.php" class="btn btn-success">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>