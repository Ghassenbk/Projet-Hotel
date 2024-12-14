<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class=" fw-bold fs-3 mb-2">GM HOTEL</h3>

            <p>

            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About </a>
        </div>
        <?php
            $contact_q="SELECT * FROM `contact_details` WHERE `sr_no`=? ";
            $values=[1];
            $contact_r=mysqli_fetch_assoc(select($contact_q,$values,'i'));
        ?>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow us </h5>

            <?php
            if($contact_r['tw']!=''){
                echo <<< data
                          <a href="<?php echo $contact_r[tw]  ?>" class="d-inline-block text-dark text-decoration-none mb-2 ">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </a><br>
                       data;
            }
            ?>

            <a href="<?php echo $contact_r['fb']  ?>" class="d-inline-block text-dark text-decoration-none mb-2 ">
                <i class="bi bi-facebook me-1"></i>Facebook
            </a><br>
            <a href="<?php echo $contact_r['insta']  ?>" class="d-inline-block text-dark text-decoration-none mb-2 ">
                <i class="bi bi-instagram me-1"></i>Instagram
            </a><br>
        </div>
    </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0"> Designed and Developed by Ghassen Boukhris & Malek Yahyaoui </h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

function alert(type,msg, position='body')
{
    let bs_class = (type == 'success' ) ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
    <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
    <strong class="me-3">${msg}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>`;

    if(position == 'body'){
        document.body. append(element);
        element. classList.add('custom-alert');
    }
    else{
    document.getElementById(position).appendChild(element);
    }
    setTimeout(remAlert, 2000);
}
function remAlert(){
    document.getElementsByClassName('alert')[0].remove();
}
    let register_form = document.getElementById('register_form');
    register_form.addEventListener('submit',(e)=>{
        e.preventDefautl();

        let data= new FormData();
        data.append('name',register_form.elements['name'].value);
        data.append('email',register_form.elements['email'].value);
        data.append('phonenum',register_form.elements['phonenum'].value);
        
        data.append('address',register_form.elements['address'].value);
        data.append('pincode',register_form.elements['pincode'].value);
        data.append('dob',register_form.elements['dob'].value);
        data.append('pass',register_form.elements['pass'].value);
        data.append('cpass',register_form.elements['cpass'].value);
        data.append('profile',register_form.elements['profile'].files[0]);
        data.append('register','');

        var myModal = document.getElementById(registerModal);
        var modal  = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr= new XMLHttpRequest();
        xhr.open("POST0","ajax/login_register.php",true);
        xhr.onload=function(){
            if(this.responseText =='pass_mismatch'){
                alert('erro',"PASSWORD Mismatch")
            }
            else if(this.responseText == 'email_already'){
                alert('error',"Email is already registered!");
            }
            else if(this.responseText == 'phone_already'){
                alert('error',"phone number is already registered!");
            }
            else if(this.responseText == 'inv_img'){
                alert('error',"Only JPG, WEBP & PNG images are allowed ");
            }
            else if(this.responseText == 'upd_failed'){
                alert('error',"image upload failed  ");
                register_form.reset();
            }
            

        }
        xhr.send(data);




    });


</script>

