function update()
{
    let myName = document.getElementById("myName").value;
   let myEmail    = document.getElementById("myEmail").value;
   let filedata = new FormData();

   filedata.append('name',myName);
   filedata.append('email',myEmail);


   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function() {
       if (xhr.readyState == 4 && xhr.status == 200) {
           Swal.fire(
               'Good job!',
               'You clicked the button!',
               'success'
             )

       }else{
      
       }

   }


   xhr.open('post', '/updateprofiluser');
   xhr.send(filedata);
}
