
  <a href="https://wa.me/70000000111" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

  <!-- Footer Starts Here -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item">
          <h4>Bkkk Cars</h4>
          <p> Bkkk cars based in kendrapara,odisha and started in 2011,Bkkk cars is the first platform in india that offers you pre-owned car test drive at your doorstep. it is a b2c web platform that connects directly to the customers  we are expanding our doorstep test drive services to every street in odisha soon .</p>
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item">
          <h4>Customer Support</h4>
          <ul class="menu-list">
            <li><a href="#">feedback</a></li>
            <li><a href="#">Payment Option</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</li>
              <li><a href="{{ url('/about') }}">About Us</a></li>
              <li><a href="{{ url('/faq') }}">FAQ</a></li>
              <li><a href="{{ url('/terms') }}">Terms</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item">
          <h4>Visit Us</h4>
          <ul class="menu-list">
            <li><span class="icon icon-map-marker"></span><span class="text">XYZ, 754211, kendrapara, Odisha </span></li>
            <li><a href="tel:+91 700000011"><span class="icon icon-phone"></span><span class="tel">+91-7000000111</span></a></li>
            <li><a href="tel:+91-7000043***"><span class="icon icon-phone"></span><span class="tel">+91-7000043***</span></a></li>
            <li><a href="email:codingcaptain@gmail.in"><span class="icon icon-envelope"></span><span class="text">codingcaptain@gmail.in</span></a></li>
          </ul>
           
          </ul>
        </div>
        <div class="col-md-3 footer-item last-item">
          <h4>Contact Us</h4>
          <div class="contact-form">
            <form id="contact footer-contact" action="" method="">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
    $('.filter-select').change(function(){
      table.column($(this).data('column'))
      .search(($this).val())
      .draw();
    });
    })
  </script>
{{-- <script>
$(document).ready(function(){
  fill_datatable();
  function fill_datatable(fuel='',price='')
  {
    var datatable=$('#userTable').Datatable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"{{ route('customsearch.index') }}",
        data:{fuel:fuel,price:price}
      },
      column:[
        {
          data:Name,
          name:name
        },
        column:[
        {
          data:Type,
          name:type
        },
        column:[
        {
          data:Model,
          name:model
        },
        column:[
        {
          data:Kilometer_run,
          name:kilometer_run
        },
        column:[
        {
          data:Price,
          name:price
        },
        column:[
        {
          data:Brand,
          name:brand
        },
      ]
    });
  }
$('#filter')
});
  </script>.click(function(){
var fuel=$('#fuel').val();
var price=$('#price').val();
if(fuel != '' && price != '')
{
  $('#cutomer_data').DataTable().destory();
  fill_datatable(fuel,price);
} 
else{
alert('select both filter option');
}
  });
  $('#reset').click(function(){
$('#fuel').val('');
$('#rice').val('');
$('#customer_data').DataTable().destroy();
fill_datatable();
  });
  </script> --}}

  {{-- <script>
    $(document).ready(function(){
    
      $("#filter").click(function(){
        var fuel = $("#fuel").val();
        var brand = $("#brand").val();
        var used = $("#used_vehicle").val();
        // var price = $('#priceID').val();
        
        $.ajax({
          type: 'get',
          dataType: 'html',
          url: '{{url('/cars')}}',
          data: 'cat_id=' + fuel + '&price=' + brand + '&used=' +used,
          success:function(response){
            console.log(response);
            $("#productData").html(response);
          }
        });
    
    
      });
    
    });
    </script> --}}