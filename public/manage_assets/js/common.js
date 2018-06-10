function getSportsList()
         {  loading.style.display = "block";
            $.ajax({
            url:url+'/angularapi.php?act=sportlisting',
            type:'GET',
            dataType:'text',
            success:function(result)
            {  
                var data = JSON.parse(result);
               var option = '<option></option>';
               data.forEach(function(data){
                option += '<option>'+data.sports+'</option>';
               });
                $('#sport').html(option);
                loading.style.display = "none";
            }
           });
          }

function Base64Encode(str) {
    if (/([^\u0000-\u00ff])/.test(str)) throw Error('String must be ASCII');

    var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    var o1, o2, o3, bits, h1, h2, h3, h4, e=[], pad = '', c;

    c = str.length % 3;  // pad string to length of multiple of 3
    if (c > 0) { while (c++ < 3) { pad += '='; str += '\0'; } }
    // note: doing padding here saves us doing special-case packing for trailing 1 or 2 chars

    for (c=0; c<str.length; c+=3) {  // pack three octets into four hexets
        o1 = str.charCodeAt(c);
        o2 = str.charCodeAt(c+1);
        o3 = str.charCodeAt(c+2);

        bits = o1<<16 | o2<<8 | o3;

        h1 = bits>>18 & 0x3f;
        h2 = bits>>12 & 0x3f;
        h3 = bits>>6 & 0x3f;
        h4 = bits & 0x3f;

        // use hextets to index into code string
        e[c/3] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
    }
    str = e.join('');  // use Array.join() for better performance than repeated string appends

    // replace 'A's from padded nulls with '='s
    str = str.slice(0, str.length-pad.length) + pad;

    return str;
}

/**
 * Decode string from Base64, as defined by RFC 4648 [http://tools.ietf.org/html/rfc4648].
 * As per RFC 4648, newlines are not catered for.
 *
 * Can be achieved JavaScript with atob(), but this approach may be useful in other languages.
 *
 * @param {string} str Base64-encoded string.
 * @returns {string} Decoded ASCII/ISO-8859-1 string.
 */
function Base64Decode(str) {
    if (!(/^[a-z0-9+/]+={0,2}$/i.test(str)) || str.length%4 != 0) throw Error('Not base64 string');

    var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    var o1, o2, o3, h1, h2, h3, h4, bits, d=[];

    for (var c=0; c<str.length; c+=4) {  // unpack four hexets into three octets
        h1 = b64.indexOf(str.charAt(c));
        h2 = b64.indexOf(str.charAt(c+1));
        h3 = b64.indexOf(str.charAt(c+2));
        h4 = b64.indexOf(str.charAt(c+3));

        bits = h1<<18 | h2<<12 | h3<<6 | h4;

        o1 = bits>>>16 & 0xff;
        o2 = bits>>>8 & 0xff;
        o3 = bits & 0xff;

        d[c/4] = String.fromCharCode(o1, o2, o3);
        // check for padding
        if (h4 == 0x40) d[c/4] = String.fromCharCode(o1, o2);
        if (h3 == 0x40) d[c/4] = String.fromCharCode(o1);
    }
    str = d.join('');  // use Array.join() for better performance than repeated string appends

    return str;
}

$(document).ready(function(){
$('.btn.btn-n.nextBtn').click(function(){ var id = $("#myTabContent div.active").attr('id');
            $('#myTab li').removeClass('active');
            var id_val =  parseInt(id['4'])+1;
            id = id.replace(/.$/,id_val);
            console.log(id);
            $('.'+id).parent('li').addClass('active');
           });

});

window.clearconsole = function clearconsole(){

//function clearconsole() { 
  console.log(window.console);
  if(window.console || window.console.firebug) {
   console.clear();
  }
}
 function alert_msg(msg)
    {
//       $.alert({
//     title: '',
//     animation: 'top',
//     closeAnimation: 'scale',
//     animationSpeed: 200,
//     type:'blue',
//     content: msg
// });
      $.confirm({
    title: 'Message',
    content: msg,
    type:'blue',
    buttons: {
        Ok: function () {
            //window.location.href = "<?php echo url('/user/logout'); ?>";
         },
     }
});



    }


$(document).ready(function(){
$('#alert button').on('click',function(){$('#alert').modal('hide');});
});

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}

var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
