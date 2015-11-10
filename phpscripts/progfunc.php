<?php


function firstsem(){

echo '
<table class="table hidden-xs" >
  <thead>
    <tr>
      <th><i class="fa fa-clock-o hidden-lg hidden-md hidden-xl"></i> <span class="hidden-xs hidden-sm">Ώρες</span></th>
    <th><span class="hidden-lg hidden-md hidden-xl">Δ</span> <span class="hidden-xs hidden-sm">Δευτέρα</span></th>
      <th><span class="hidden-lg hidden-md hidden-xl">Τ</span> <span class="hidden-xs hidden-sm">Τρίτη</span></th>
      <th><span class="hidden-lg hidden-md hidden-xl">Τ</span> <span class="hidden-xs hidden-sm">Τετάρτη</span></th>
      <th><span class="hidden-lg hidden-md hidden-xl">Π</span> <span class="hidden-xs hidden-sm">Πέμπτη</span></th>
      <th><span class="hidden-lg hidden-md hidden-xl">Π</span> <span class="hidden-xs hidden-sm">Παρασκευή</span></th>
    </tr>
  </thead>
  <tbody>
    <tr>
          <td rowspan="3" id="coltime">09:00-10:00</td><br>
          <td>Ψηφιακά Συστήµατα (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Κλεφτούρης</td>
          <td>Εισαγωγή στην Πληροφορική (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Ηλιούδης</td>
          <td>Μαθηµατική Ανάλυση και Γραµµική (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Αντωνίου</td>
          <td>Εισαγωγή στην Πληροφορική (<b id="lab8">T8</b>)<br><i class="fa fa-university fa-fw" ></i> 301<br><i class="fa fa-male fa-fw" ></i>Βίτσας</td>
          <td>Αλγοριθµική και Προγραµµατισµός (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
    </tr>
    <tr>
      <td></td>
      <td>∆εξιότητες Επικοινωνίας/Κοινωνικά(<b id="lab9">T9</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Σιάκα</td>
      <td></td>
      <td>Αλγοριθµική και Προγραµµατισµός (<b id="lab10">T10</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
        <td>Ψηφιακά Συστήµατα (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Κλεφτούρης</td>
      <td></td>
    </tr>

    <tr>
            <td id="coltime" rowspan="3">10:00-11:00</td>
            <td>Ψηφιακά Συστήµατα (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Κλεφτούρης</td>
            <td>Εισαγωγή στην Πληροφορική (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Ηλιούδης</td>
            <td>Εισαγωγή στην Πληροφορική (<b id="lab7">T7</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Βίτσας</td></td>
            <td>Εισαγωγή στην Πληροφορικήα (<b id="lab8">T8</b>)<br><i class="fa fa-university fa-fw" ></i> 301<br><i class="fa fa-male fa-fw" ></i>Βίτσας</td>
            <td>Αλγοριθµική και Προγραµµατισµός (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
    </tr>
    <tr>
            <td></td>
            <td>∆εξιότητες Επικοινωνίας/Κοινωνικά(<b id="lab9">T9</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Σιάκα</td>
            <td>Μαθηµατική Ανάλυση και Γραµµική (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Αντωνίου</td>
            <td>Αλγοριθµική και Προγραµµατισµός (<b id="lab10">T10</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
            <td></td>
    </tr>
    <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Ψηφιακά Συστήµατα (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Κλεφτούρης</td>
            <td></td>
    </tr>

    <tr>
            <td id="coltime" rowspan="4">11:00-12:00</td>
            <td>Εισαγωγή στην Πληροφορική (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Ηλιούδης</td>
            <td>Εισαγωγή στην Πληροφορική (<b id="lab2">T2</b>)<br><i class="fa fa-university fa-fw" ></i> 202<br><i class="fa fa-male fa-fw" ></i>Ηλιούδης</td>
            <td>Εισαγωγή στην Πληροφορική (<b id="lab7">T7</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Βίτσας</td></td>
            <td>Εισαγωγή στην Πληροφορικήα (<b id="lab9">T9</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Βίτσας</td>
            <td> Εισαγωγή στην Πληροφορική (<b id="lab6">T6</b>)<br><i class="fa fa-university fa-fw" ></i> 202<br><i class="fa fa-male fa-fw" ></i>Αντωνίου</td>
    </tr>
    <tr>
            <td>∆εξιότητες Επικοινωνίας/Κοινωνικά(<b id="lab7">T7</b>)<br><i class="fa fa-university fa-fw" ></i> 210<br><i class="fa fa-male fa-fw" ></i>Γιακουστίδης</td>
            <td>Αλγοριθµική και Προγραµµατισµός(<b id="lab6">T6</b>)<br><i class="fa fa-university fa-fw" ></i> 301<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
            <td>Μαθηµατική Ανάλυση και Γραµµική (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Αντωνίου</td>
            <td>Αλγοριθµική και Προγραµµατισµός (<b>Θ</b>)<br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
            <td>Αλγοριθµική και Προγραµµατισµός(<b id="lab3">T3</b>)<br><i class="fa fa-university fa-fw" ></i> 210<br><i class="fa fa-male fa-fw" ></i>Σφέτσος</td>
    </tr>
    <tr>
            <td></td>
            <td>Αλγοριθµική και Προγραµµατισµός(<b id="lab1">T1</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Γιακουστίδης</td>
            <td></td>
            <td></td>
            <td>Αλγοριθµική και Προγραµµατισµός(<b id="lab4">T4</b>)<br><i class="fa fa-university fa-fw" ></i> 211<br><i class="fa fa-male fa-fw" ></i>Ράπτης</td>
    </tr>
    <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>∆εξιότητες Επικοινωνίας/Κοινωνικά (<b id="lab4">T1</b>)<br><i class="fa fa-university fa-fw" ></i> 208<br><i class="fa fa-male fa-fw" ></i>Σιάκα</td>
    </tr>

    <tr>
            <td id="coltime" rowspan="4">12:00-13:00</td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>∆εξιότητες Επικοινωνίας/Κοινωνικά (<b id="lab4">T1</b>)<br><i class="fa fa-university fa-fw" ></i> 208<br><i class="fa fa-male fa-fw" ></i>Σιάκα</td>
    </tr>
    </tbody>
  </table>

';
}

function asem(){
 echo '
  <div class="list-group" >
    <a href="#" class="list-group-item" onclick="loadpage(5101,1)">
      <h4 class="list-group-item-heading" >Εισαγωγή στην Πληροφορική</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item" onclick="loadpage(5102,1)">
      <h4 class="list-group-item-heading">Αλγοριθμική και Προγραμματισμός</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5103,1)">
      <h4 class="list-group-item-heading">Ψηφιακά Συστήματα</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>0</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5104,1)">
      <h4 class="list-group-item-heading">Μαθηματική Ανάλυση</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>5</b> Ώρες | <i class="fa fa-flask"></i> <b>0</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5105,1)">
      <h4 class="list-group-item-heading">Δεξιότητες Επικοινωνίας/Κοινωνικά Δίκτυα</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
  </div>
  ';
}

function gsem(){
 echo '
  <div class="list-group" >
    <a href="#" class="list-group-item " onclick="loadpage(5101,3)">
      <h4 class="list-group-item-heading" >Αριθμητική Ανάλυση & Προγραμματισμός Επιστημονικών Εφαρμογών</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5102,3)">
      <h4 class="list-group-item-heading">Δομές Δεδομένων και Ανάλυση Αλγορίθμων</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5103,3)">
      <h4 class="list-group-item-heading">Οργάνωση και Αρχιτεκτονική Υπολογιστικών Συστημάτων</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5104,3)">
      <h4 class="list-group-item-heading">Αλληλεπίδραση Ανθρώπου-Μηχανής & Ανάπτυξη Διεπιφανειών Χρήστη</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5105,3)">
      <h4 class="list-group-item-heading">Συστήματα Διαχείρισης Βάσεων Δεδομένων</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
  </div>
  ';
}

function esem(){
 echo '
  <div class="list-group" >
    <a href="#" class="list-group-item " onclick="loadpage(5101,5)">
      <h4 class="list-group-item-heading" >Αρχές Σχεδίασης Λειτουργικών Συστημάτων</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>5</b> Ώρες | <i class="fa fa-flask"></i> <b>0</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5102,5)">
      <h4 class="list-group-item-heading">Μηχανική Λογισμικού Ι</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5103,5)">
      <h4 class="list-group-item-heading">Δίκτυα Η/Υ</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5104,5)">
      <h4 class="list-group-item-heading">Ανάπτυξη Διαδικτυακών Συστ. και Εφαρμογών</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="#" class="list-group-item " onclick="loadpage(5105,5)">
      <h4 class="list-group-item-heading">Επιχειρησιακή Έρευνα</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>0</b> Ώρες</p>
    </a>
  </div>
  ';
}


?>
