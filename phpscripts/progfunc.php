<?php


function firstsem(){

echo '
<table class="table hidden-xs" >
  <thead>
    <tr>
      <th>Ώρες</th>
      <th>Δευτέρα</th>
      <th>Τρίτη</th>
      <th>Τετάρτη</th>
      <th>Πέμπτη</th>
      <th>Παρασκευή</th>
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
    <a href="index.php?c=prog&pm=main&cid=5101" class="list-group-item '.setactive('5101').'" >
      <h4 class="list-group-item-heading" >Εισαγωγή στην Πληροφορική</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="index.php?c=prog&pm=main&cid=5102" class="list-group-item '.setactive('5102').'">
      <h4 class="list-group-item-heading">Αλγοριθμική και Προγραμματισμός</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
    <a href="index.php?c=prog&pm=main&cid=5103" class="list-group-item '.setactive('5103').'">
      <h4 class="list-group-item-heading">Ψηφιακά Συστήματα</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>4</b> Ώρες | <i class="fa fa-flask"></i> <b>0</b> Ώρες</p>
    </a>
    <a href="index.php?c=prog&pm=main&cid=5104" class="list-group-item '.setactive('5104').'" >
      <h4 class="list-group-item-heading">Μαθηματική Ανάλυση</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>5</b> Ώρες | <i class="fa fa-flask"></i> <b>0</b> Ώρες</p>
    </a>
    <a href="index.php?c=prog&pm=main&cid=5105" class="list-group-item '.setactive('5105').'">
      <h4 class="list-group-item-heading">Δεξιότητες Επικοινωνίας/Κοινωνικά Δίκτυα</h4>
      <p class="list-group-item-text"><i class="fa fa-book"></i> <b>3</b> Ώρες | <i class="fa fa-flask"></i> <b>2</b> Ώρες</p>
    </a>
  </div>
  ';
}

function getcour($id){
  if($id==5101){
    echo '
    <table class="table" >
      <thead>
        <tr>
          <th>Ώρες</th>
          <th>Δευτέρα</th>
          <th>Τρίτη</th>
          <th>Τετάρτη</th>
          <th>Πέμπτη</th>
          <th>Παρασκευή</th>
        </tr>
      </thead>
      <tbody>
        <tr>
              <td id="coltime">09:00-10:00</td>
              <td></td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Ηλιούδης</span></td>
              <td></td>
              <td id="lab8"><i class="fa fa-flask fa-fw"></i> <b id="lab8">T8</b><br><i class="fa fa-university fa-fw" ></i> 301<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td></td>
        </tr>
        <tr>
              <td id="coltime">10:00-11:00</td>
              <td></td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Ηλιούδης</span></td>
              <td id="lab7"><i class="fa fa-flask fa-fw"></i> <b id="lab7">T7</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id="lab8"><i class="fa fa-flask fa-fw"></i> <b id="lab8">T8</b><br><i class="fa fa-university fa-fw" ></i> 301<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td></td>
        </tr>
        <tr>
              <td id="coltime">11:00-12:00</td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Ηλιούδης</span></td>
              <td id="lab2"><i class="fa fa-flask fa-fw"></i> <b id="lab2">T2</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ηλιούδης</span></td>
              <td id="lab7"><i class="fa fa-flask fa-fw"></i> <b id="lab7">T7</b><br><i class="fa fa-university fa-fw" ></i> 301<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id="lab9"><i class="fa fa-flask fa-fw"></i> <b id="lab9">T9</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id="lab6"><i class="fa fa-flask fa-fw"></i> <b id="lab6">T6</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
        </tr>
        <tr>
              <td id="coltime">12:00-13:00</td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Ηλιούδης</span></td>
              <td id="lab2"><i class="fa fa-flask fa-fw"></i> <b id="lab2">T2</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ηλιούδης</span></td>
              <td id=""></td>
              <td id="lab9"><i class="fa fa-flask fa-fw"></i> <b id="lab9">T9</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id="lab6"><i class="fa fa-flask fa-fw"></i> <b id="lab6">T6</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
        </tr>
        <tr>
              <td id="coltime">13:00-14:00</td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
        </tr>
        <tr>
              <td id="coltime" rowspan="2">14:00-15:00</td>
              <td id=""></td>
              <td id=""></td>
              <td id="lab4"><i class="fa fa-flask fa-fw"></i> <b id="lab4">T4</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ηλιούδης</span></td>
              <td id="lab5"><i class="fa fa-flask fa-fw"></i> <b id="lab5">T5</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id=""></td>
        </tr>
        <tr>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
          <td id="lab3" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab3">T3</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
        </tr>
        <tr>
              <td id="coltime" rowspan="2">15:00-16:00</td>
              <td id=""></td>
              <td id=""></td>
              <td id="lab4"><i class="fa fa-flask fa-fw"></i> <b id="lab4">T4</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ηλιούδης</span></td>
              <td id="lab5"><i class="fa fa-flask fa-fw"></i> <b id="lab5">T5</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id=""></td>
        </tr>
        <tr>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
          <td id="lab3" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab3">T3</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
        </tr>
        <tr>
              <td id="coltime">16:00-17:00</td>
              <td id="lab1"><i class="fa fa-flask fa-fw"></i> <b id="lab1">T1</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
        </tr>
        <tr>
              <td id="coltime">17:00-18:00</td>
              <td id="lab1"><i class="fa fa-flask fa-fw"></i> <b id="lab1">T1</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
        </tr>
    </tbody>
  </table>
    ';

  }
  elseif($id==5102){
    echo'
    <table class="table" >
      <thead>
        <tr>
          <th>Ώρες</th>
          <th>Δευτέρα</th>
          <th>Τρίτη</th>
          <th>Τετάρτη</th>
          <th>Πέμπτη</th>
          <th>Παρασκευή</th>
        </tr>
      </thead>
      <tbody>
        <tr>
              <td id="coltime">09:00-10:00</td>
              <td></td>
              <td></td>
              <td></td>
              <td id="lab10"><i class="fa fa-flask fa-fw"></i> <b id="lab10">T10</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Σφέτσος</span></td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Σφέτσος</span></td>
        </tr>
        <tr>
              <td id="coltime">10:00-11:00</td>
              <td></td>
              <td></td>
              <td></td>
              <td id="lab10"><i class="fa fa-flask fa-fw"></i> <b id="lab10">T10</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Σφέτσος</span></td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Σφέτσος</span></td>
        </tr>
        <tr>
              <td id="coltime" rowspan="2">11:00-12:00</td>
              <td id=""></td>
              <td id="lab6"><i class="fa fa-flask fa-fw"></i> <b id="lab6">T6</b><br><i class="fa fa-university fa-fw" ></i> 301<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Σφέτσος</span></td>
              <td id=""></td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Σφέτσος</span></td>
              <td id="lab3"><i class="fa fa-flask fa-fw"></i> <b id="lab3">T3</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Σφέτσος</span></td>
        </tr>
        <tr>
          <td id="noborderup"></td>
          <td id="lab1" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab1">T1</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Γιακουστίδης</span></td>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
          <td id="lab4" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab4">T4</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ράπτης</span></td>
        </tr>
        <tr>
              <td id="coltime" rowspan="2">12:00-13:00</td>
              <td id=""></td>
              <td id="lab6"><i class="fa fa-flask fa-fw"></i> <b id="lab6">T6</b><br><i class="fa fa-university fa-fw" ></i> 301<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Σφέτσος</span></td>
              <td id=""></td>
              <td><i class="fa fa-book fa-fw"></i> <b id="">Θ1</b><br><i class="fa fa-university fa-fw" ></i> AΜΦ<br><span class="hidden-xs"><i class="fa fa-male fa-fw  " ></i> Σφέτσος</span></td>
              <td id="lab3"><i class="fa fa-flask fa-fw"></i> <b id="lab3">T3</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Σφέτσος</span></td>
        </tr>
        <tr>
          <td id="noborderup"></td>
          <td id="lab1" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab1">T1</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Γιακουστίδης</span></td>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
          <td id="lab4" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab4">T4</b><br><i class="fa fa-university fa-fw" ></i> 211<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ράπτης</span></td>
        </tr>
        <tr>
              <td id="coltime">13:00-14:00</td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
        </tr>
        <tr>
              <td id="coltime" rowspan="2">14:00-15:00</td>
              <td id=""></td>
              <td id=""></td>
              <td id="lab4"><i class="fa fa-flask fa-fw"></i> <b id="lab4">T4</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ηλιούδης</span></td>
              <td id="lab5"><i class="fa fa-flask fa-fw"></i> <b id="lab5">T5</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id=""></td>
        </tr>
        <tr>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
          <td id="lab3" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab3">T3</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
        </tr>
        <tr>
              <td id="coltime" rowspan="2">15:00-16:00</td>
              <td id=""></td>
              <td id=""></td>
              <td id="lab4"><i class="fa fa-flask fa-fw"></i> <b id="lab4">T4</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Ηλιούδης</span></td>
              <td id="lab5"><i class="fa fa-flask fa-fw"></i> <b id="lab5">T5</b><br><i class="fa fa-university fa-fw" ></i> 201<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Βίτσας</span></td>
              <td id=""></td>
        </tr>
        <tr>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
          <td id="lab3" class="noborderup"><i class="fa fa-flask fa-fw"></i> <b id="lab3">T3</b><br><i class="fa fa-university fa-fw" ></i> 202<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
          <td id="noborderup"></td>
          <td id="noborderup"></td>
        </tr>
        <tr>
              <td id="coltime">16:00-17:00</td>
              <td id="lab1"><i class="fa fa-flask fa-fw"></i> <b id="lab1">T1</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
        </tr>
        <tr>
              <td id="coltime">17:00-18:00</td>
              <td id="lab1"><i class="fa fa-flask fa-fw"></i> <b id="lab1">T1</b><br><i class="fa fa-university fa-fw" ></i> 210<br><span class="hidden-xs"><i class="fa fa-male fa-fw" ></i> Αντωνίου</span></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
              <td id=""></td>
        </tr>
    </tbody>
    </table>
    ';
  }
}

?>
