<b id="heds"><i class="fa fa-calendar-check-o "></i> Πρόγραμμα > <i class="fa fa-calendar fa-fw"></i> Ανά εξάμηνο > </b><b id="semname">Α εξάμηνο</b>
<hr>
<ul class="nav nav-tabs">
  <li class="active">
    <a href="#panel-806771" data-toggle="tab" onclick="getcanname(this)">Α εξάμηνο</a>
  </li>
  <li>
    <a href="#panel-993226" data-toggle="tab" class="btn disabled" onclick="getcanname(this)">Β εξάμηνο</a>
  </li>
  <li>
    <a href="#panel-993226" data-toggle="tab" onclick="getcanname(this)">Γ εξάμηνο</a>
  </li>
  <li>
    <a href="#panel-993226" data-toggle="tab" class="btn disabled" onclick="getcanname(this)">Δ εξάμηνο</a>
  </li>
  <li>
    <a href="#panel-993227" data-toggle="tab" onclick="getcanname(this)">Ε εξάμηνο</a>
  </li>
  <li>
    <a href="#panel-993226" data-toggle="tab" class="btn disabled" onclick="getcanname(this)">ΣΤ εξάμηνο</a>
  </li>
  <li>
    <a href="#panel-993226" data-toggle="tab" onclick="getcanname(this)">Ζ εξάμηνο</a>
  </li>
</ul>
<div class="tab-content ">
  <div class="tab-pane active" id="panel-806771">
    <div class="container-fluid">
    <div class="row ">
      <div class="col-xl-3 col-lg-3 col-md-6  col-sm-12" id="courmenu">
        <select class="myform-control input-group input-group-lg" id="select1menu"onchange="loadpage(this.value,1,this)">
        <option >Επιλέξτε ενα μάθημα</option>
         <option value="5101" erg="2" the="3">Εισαγωγή στην Πληροφορική</option>
         <option value="5102" erg="2" the="3">Αλγοριθμική και Προγραμματισμός</option>
         <option value="5103" erg="0" the="4">Ψηφιακά Συστήματα</option>
         <option value="5104" erg="0" the="5">Μαθηματική Ανάλυση</option>
         <option value="5105" erg="2" the="3">Δεξιότητες Επικοινωνίας/Κοινωνικά Δίκτυα</option>
       </select>

       <div class="panel panel-default">
              <div class="panel-body">
              <strong id="subinfo1">Επιλέξτε ενα μάθημα.</strong><hr>
              <i class="fa fa-book"></i> <b id="labinfo1">0</b> Ώρες | <i class="fa fa-flask"></i> <b id="theinfo1">0</b> Ώρες<hr>
              <b>Εξάμηνο:</b> Α
            </div>
      </div>
        </div>
      <div class="col-xl-9 col-lg-9 col-md-6  col-sm-12" id="tableresult">

        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-1x"> Παρακαλώ επιλέξτε ενα μάθημα από την λίστα.</i></div>
      </div>
    </div>
  </div>
  </div>
  <div class="tab-pane" id="panel-993226">
    <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-6  col-sm-12" id="courmenu">
        <select class="myform-control input-group input-group-lg" id="select3menu"onchange="loadpage(this.value,3,this)">
        <option >Επιλέξτε ενα μάθημα</option>
         <option value="5101" erg="2" the="3">Αριθμητική Ανάλυση & Προγραμματισμός Επιστημονικών Εφαρμογών</option>
         <option value="5102" erg="2" the="3">Δομές Δεδομένων και Ανάλυση Αλγορίθμων</option>
         <option value="5103" erg="2" the="3">Οργάνωση και Αρχιτεκτονική Υπολογιστικών Συστημάτων</option>
         <option value="5104" erg="2" the="3">Αλληλεπίδραση Ανθρώπου-Μηχανής & Ανάπτυξη Διεπιφανειών Χρήστη</option>
         <option value="5105" erg="2" the="3">Συστήματα Διαχείρισης Βάσεων Δεδομένων</option>
       </select>

       <div class="panel panel-default">
              <div class="panel-body">
              <strong id="subinfo3">Επιλέξτε ενα μάθημα.</strong><hr>
              <i class="fa fa-book"></i> <b id="labinfo3">0</b> Ώρες | <i class="fa fa-flask"></i> <b id="theinfo3">0</b> Ώρες<hr>
              <b>Εξάμηνο:</b> Γ
            </div>
      </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-6  col-sm-12" id="tableresult3">
        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-1x"> Παρακαλώ επιλέξτε ενα μάθημα από την λίστα.</i></div>
      </div>
    </div>
  </div>
  </div>

  <div class="tab-pane" id="panel-993227">
    <div class="row">
      <div class="container-fluid">
      <div class="col-xl-3 col-lg-3 col-md-6  col-sm-12" id="courmenu">
          <select class="myform-control input-group input-group-lg" id="select5menu"onchange="loadpage(this.value,5,this)">
          <option >Επιλέξτε ενα μάθημα</option>
           <option value="5101" erg="0" the="5">Αρχές Σχεδίασης Λειτουργικών Συστημάτων</option>
           <option value="5102" erg="2" the="4">Μηχανική Λογισμικού Ι</option>
           <option value="5103" erg="2" the="3">Δίκτυα Η/Υ</option>
           <option value="5104" erg="2" the="3">Ανάπτυξη Διαδικτυακών Συστ. και Εφαρμογών</option>
           <option value="5105" erg="0" the="4">Επιχειρησιακή Έρευνα</option>
         </select>
         <div class="panel panel-default">
                <div class="panel-body">
                <strong id="subinfo5">Επιλέξτε ενα μάθημα.</strong><hr>
                <i class="fa fa-book"></i> <b id="labinfo5">0</b> Ώρες | <i class="fa fa-flask"></i> <b id="theinfo5">0</b> Ώρες<hr>
                <b>Εξάμηνο:</b> Ε
              </div>

      </div>
    </div>
      <div class="col-xl-9 col-lg-9 col-md-6  col-sm-12" id="tableresult5">
        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-1x"> Παρακαλώ επιλέξτε ενα μάθημα από την λίστα.</i></div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
