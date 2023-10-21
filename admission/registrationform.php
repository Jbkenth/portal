<?php include('server.php') ?>
<!Doctype html>
<html>
    <head>
    <title>Saint Francis College Guihulngan</title>
    <link rel="stylesheet" type="text/css" href="registrationform.css" />
    </head>
<body>
    <h6>School Management System J.J.V.F.F Version 0.0.1 SFCG</h6>   
    <h1>School Enrollment Registration Form</h1>
    <hr class="hr">
<form method="post" action="registrationform.php" id="check" onsubmit="return l(this)">
  	<div class="table">
        <div class="course">
          <input type="text" class="course1" value="COURSE:" disabled />
          <select name="course" for="course" required>
            <option disabled selected hidden></option>
            <option value="BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION">BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION</option>
            <option value="BACHELOR OF SCIENCE IN SECONDARY EDUCATION">BACHELOR OF SCIENCE IN SECONDARY EDUCATION</option>
            <option value="BACHELOR OF ELEMENTARY SCHOOL">BACHELOR OF ELEMENTARY SCHOOL</option>
            <option value="BACHELOR OF SCIENCE IN INFORMATION SYSTEMS">BACHELOR OF SCIENCE IN INFORMATION SYSTEMS</option>
          </select>
          <input type="date" class="date1" required/>
          <input type="text" class="date" value="DATE:" disabled />
        </div>
        <div class="idnumber">
          <input type="text" class="idnumber1" value="STUDENT ID NUMBER:" disabled />
          <input type="text" class="idnumber2" required/>
        </div>
        <div class="st_type">
          <p><b>Student Type:</b></p>
          <div class="check"><span id="validation-message"></span></div>
          <div class="st_type1">
          <input type="checkbox" onclick="c11()" id="c1"/><label>Freshmen</label>
          <input type="checkbox" onclick="cc()" id="c2"/><label>Transferee</label>
          <input type="checkbox" onclick="ccc()" id="c3"/><label>Second Course</label>
          <br>
          <input type="checkbox" onclick="cccc()" id="c4"/><label>Old Returnee</label>
          </div>
        </div>
        <div class="nm_student">
          <p><b>NAME OF STUDENT:</b></p>
          <div class="lrn">
          <label><b>LRN:</b></label>
          <input type="text" required/>
      </div>
      <div class="lastname">
          <label>Last Name:</label>
          <input type="text" required/>
        </div>
        <div class="firstname">
          <label>First Name:</label>
          <input type="text" required/>
        </div>
        <div class="middlename">
          <label>Middle Name:</label>
          <input type="text" />
        </div>
        <div class="suffix">
          <label>Suffix:</label>
          <select required>
            <option disabled selected hidden></option>
            <option value="">None</option>
            <option>Jr.</option>
            <option>Sr.</option>
            <option>I</option>
            <option>II</option>
            <option>III</option>
          </select>
        </div>
        <div class="pic">
        <p><img id="output"/></p>
        <div class="pic2"> 
        <label for="finput" class="custom-file-upload">
        Upload Photo
        </label>
        <div class="photo"><span id="r"></span></div>
      </div>
        <input type="file" accept="image/*" multiple="false" id=finput onchange="loadFile(event)" required/>
        </div>
        <div class="photo"><span id="r"></span></div>
        </div>
        <div class="pi">
          <p><b>PERSONAL INFORMATION</b></p>
            <label>DATE OF BIRTH:</label>
            <select required>
              <option disabled selected hidden></option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select> -
            <select required>
              <option disabled selected hidden></option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select> -
            <input type="text" minlength="4" maxlength="4" required/>
            <br>
            <div class="label">
            <label class="label1"><i>Month</i></label>
            <label class="label2"><i>Day</i></label>
            <label class="label3"><i>Year</i></label>
            </div>
            <div class="pob">
              <label>PLACE OF BIRTH: </label>
              <input type="text" required/>
              <div class="pob1">
                <label><i>Barangay, Town/City, Province</i></label>
              </div>
            </div>
            <div class="age">
              <label>AGE: </label>
              <input type="number"  required/>
            </div>
            <div class="nationality">
              <label>NATIONALITY: </label>
              <input type="text" required/>
            </div>
            <div class="check2"><span id="count"></div>
            <div class="check3"><span id="count2"></span></div>
            <div class="civil">
              <label>CIVIL STATUS: </label>
              <input type="checkbox" onclick="d1()" name="a1" id="a1" />Single
              <input type="checkbox" onclick="d2()" name="a2" id="a2" />Married
              <input type="checkbox" onclick="d3()" name="a3" id="a3" />Window/er
              <label class="gender">GENDER: </label>
              <input type="checkbox" onclick="d4()" name="b1" id="b1" />Male
              <input type="checkbox" onclick="d5()" name="b2" id="b2"/>Female
            </div>
            <div class="religion">
              <label>RELIGION: </label>
              <input type="text" required/>
              <label class="religion2">CONTACT NUMBER: </label>
              <input type="tel" pattern="[0-9]{11}" />
            </div>
            <div class="ea">
              <label>EMAIL ADDRESS: </label>
              <input type="email" /> 
            </div>
            <div class="pa">
              <label>PERMANENT ADDRESS: </label>
              <input type="text" required />
              <label class="pa2">POSTAL CODE: </label>
              <input type="number" required />
            </div>
            <div class="tables">
              <table>
                <tr>
                  <td><hr></td>
                  <td class="td"><b>Name</b></td>
                  <td class="td2"><b>Age</b></td>
                  <td class="td3"><b>Educational Attainment</b></td>
                  <td class="td4"><b>Occupation</b></td>
                  <td class="td5"><b>Contact No.</b></td>
                </tr>
                <tr>
                  <td>FATHER</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>MOTHER</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>GUARDIAN</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>SPOUSE</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
        </div>
        <div class="button">
          <input type="submit" onclick="photo()" value="Submit" />
        </div>
    </div>
</form>
<script src="function.js"></script>
<script src="function2.js"></script>
<script src="function3.js"></script>
  </body>
</html>