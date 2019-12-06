function mute() {
  if (document.getElementById('BA').muted == false) {
    document.getElementById('BA').muted = true;
  } else {
    document.getElementById('BA').muted = false;
  }
}


function Form() {
  if (document.getElementById("myForm").style.display == "block") {
    document.getElementById("myForm").style.display = "none";
  } else {
    document.getElementById("myForm").style.display = "block";
  }
}

function FormD() {
  if (document.getElementById("myFormD").style.display == "block") {
    document.getElementById("myFormD").style.display = "none";
  } else {
    document.getElementById("myFormD").style.display = "block";
  }
}

function soon() {
  if (document.getElementById("coming").style.display == "block") {
    document.getElementById("coming").style.display = "none";
  } else {
    document.getElementById("coming").style.display = "block";
  }
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function closeFormD() {
  document.getElementById("myFormD").style.display = "none";
}

function closeSoon() {
  document.getElementById("coming").style.display = "none";
}




function submitForm() {
  var form = document.getElementById('formgear');
  var data = {};
  data['name'] = form.name.value;
  data['url'] = form.url.value;
  data['amount'] = form.sets.value;
  fetch('http://localhost:80/BlueArmyV2/Backend/gear', {
    method: 'POST',
    body: JSON.stringify(data)
  })
  .then((response) => {
    if (response.ok) {
      return response.JSON(); 
      echo(data);
    } else {
      return Promise.reject({ status: res.status, statusText: res.statusText });
    }   

  })
  .then((data) => console.log(data))
  .catch(err => console.log(console.log(err.message)));

  document.getElementById("formgear").reset();
}


