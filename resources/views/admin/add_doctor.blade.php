<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                {{session()->get('message')}}
            </div>
          @endif 

          <div class="container" align="center" style="padding-top: 100px;">
              <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="padding: 15px;">
                    <label>Doctor Name</label>
                    <input type="text" name="name" placeholder="Write the name"/>
                </div>

                <div class="padding: 15px;">
                    <label>Phone</label>
                    <input type="number" name="number" placeholder="Write the number"/>
                </div>

                <div class="padding: 15px;">
                    <label>Speciality</label>
                    <select name="speciality" style="color: black; width: 200px;">
                        <option>----Select----</option>
                        <option value="Skin">Skin</option>
                        <option value="Heart">Heart</option>
                        <option value="Eye">Eye</option>
                        <option value="Nose">Nose</option>
                    </select>
                </div>

                <div class="padding: 15px;">
                    <label>Room Number</label>
                    <input type="text" name="name" placeholder="Write the Room Number"/>
                </div>

                <div class="padding: 15px;">
                    <label>Doctor Image</label>
                    <input type="file" name="file"/>
                </div>

                <div class="padding: 15px;">
                    <input type="submit" class="btn btn-success"/>
                </div>

              </form>
          </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>
