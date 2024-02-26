<div class = "container">
  <!-- Outer Row -->
  <div class = "row justify-content-center mt-5 pt-5">
    <div class = "col-xl-6 col-lg-7 col-md-9">
      <div class = "card o-hidden border-0 my-3">
        <div class = "card-body p-3" style = "background-color: #E0E0E0;">
          <!-- Nested Row within Card Body -->
          <div class = "row">
            <div class = "col-lg">
              <div class = "p-5">
                <div class = "text-left">
                  <h1 class = "h4 text-gray-900 mb-4">
                    <img src = "./images/images/logo.png" style = "width: 40px; height: 40px;">&ensp;Login
                  </h1>

                  </div>
                    <form class = "user" method = "post" action = "<?= base_url(); ?>">
                      <div class = "form-group mt-4">
                        <input 
                          type = "text" 
                          class = "form-control form-control-user" 
                          style = "border-radius: 2px;"
                          name = "username" 
                          placeholder = "Username"
                        >

                        <?= form_error('username', '<small class = "text-danger pl-3">', '</small>') ?>
                      </div>

                      <div class = "form-group mt-4 mb-4">
                        <input 
                          type = "password" 
                          class = "form-control form-control-user" 
                          style = "border-radius: 2px;"
                          name = "password" 
                          placeholder = "Password"
                        >

                        <?= form_error('password', '<small class = "text-danger pl-3">', '</small>') ?>
                      </div>

                      <button 
                        class = "btn btn-info btn-user btn-block mt-4" 
                        style = "background-color: #FFA500; border: #FFA500; border-radius: 2px" 
                        type = "submit"
                      >
                        Login
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>