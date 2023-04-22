
//subscription

var topic = document.getElementsByClassName("nav-item");
var sub;
fetch("data.php")
.then((response) => {
  if(!response.ok){ // Before parsing (i.e. decoding) the JSON data,
                    // check for any errors.
      // In case of an error, throw.
      throw new Error("Something went wrong!");
  }

  return response.json(); // Parse the JSON data.
})
.then((data) => {
//console.log(data);
  sub = Object.values(data);
  // // console.log(data);
  console.log(sub);
   for(var i=1;i<12;i++)  {
    console.log(sub[i]);
 topic[i-1].style.display=sub[i];
     }
})

// var sub = data;

// //console.log(topic);
// for(var i=0;i<sub.length;i++)
// {
//   // topic[i].style.display=sub[i];
//   console.log(sub[i]);
// }

