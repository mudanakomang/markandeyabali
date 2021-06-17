<template>
  <div>
    <section class="login-section sp-eleven">
      <div class="container">
        <div class="login-register login-area">
          <div class="tabs-box">
            <div
              class="tab-buttons clearfix"
              style="width: 50%; margin: 0 auto"
            >
              <h4 class="text-center">Login Admin</h4>
            </div>
            <div class="tab-content">
              <div class="tab active-tab" id="tab-one" style="display: block">
                <div class="register text-center">
                  <form
                    id="contact_form"
                    name="contact_form"
                    @submit.prevent="submit"
                    method="post"
                  >
                    <div
                      class="row clearfix"
                      style="width: 50%; margin: 0 auto"
                    >
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="fa fa-user"></i
                              ></span>
                            </div>
                            <input
                              v-model="username"
                              type="text"
                              class="form-control"
                              placeholder="Username"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="fa fa-lock"></i
                              ></span>
                            </div>
                            <input
                              v-model="password"
                              type="password"
                              class="form-control"
                              placeholder="Password"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group form-bottom">
                          <button
                            class="thm-btn bg-clr1"
                            type="submit"
                            data-loading-text="Please wait..."
                          >
                            Login
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import axios from "axios";
import store from "../../../store";
export default {
  data() {
    return {
      username: "",
      password: "",
    };
  },
  methods: {
    submit: async function () {
        let credentials = {
            username: this.username,
            password: this.password
        }
        store.dispatch('login', { credentials });
    },
  },
};
</script>
<style scoped>
.sp-eleven {
  padding: 150px 0px;
}
.tabs-box .tab-buttons {
  border: 1px solid #f1f1f1;
}

.tabs-box .tab-buttons .tab-btn {
  font-size: 16px;
  color: #333333;
  font-weight: 600;
  line-height: 26px;
  padding: 18px 30px;
  display: inline-block;
  font-family: "Montserrat", sans-serif;
  transition: all 500ms ease;
}

.tabs-box .tab-buttons .tab-btn.border-area {
  border-right: 1px solid #ededed;
  border-left: 1px solid #ededed;
}

.tabs-box .tab-buttons .tab-btn.active-btn {
  color: #f9be4d;
  transition: all 500ms ease;
}

.tabs-box .tab-content .tab {
  padding-top: 10px;
  transition: all 500ms ease;
}
.login-register {
  max-width: 720px;
  margin: 0px auto;
  border: 10px solid #fafafa;
}

.login-register .tab-buttons {
  position: relative;
  display: table;
}

.login-register .tab-btn {
  font-size: 20px;
  line-height: 26px;
  font-weight: 700;
  color: #333333;
  display: table-cell;
  text-align: center;
  padding: 22px 30px;
  margin: 0px;
  width: 350px;
  background: #fafafa;
  transition: all 500ms ease;
}

.login-register .tab-btn.active-btn {
  background: none;
  transition: all 500ms ease;
}

.login-register .tab-content {
  padding: 45px;
}

.login-register .form-group {
  position: relative;
}

.login-register .form-group input {
  padding-left: 30px;
}

.login-register .form-group i {
  position: absolute;
  top: 15px;
  left: 10px;
  font-size: 15px;
  color: #f9be4d;
}

.login-register p {
  padding-top: 5px;
  margin-bottom: 10px;
}

.login-register .forgot {
  margin-bottom: 10px;
}

.login-register li {
  font-size: 16px;
  font-weight: 400;
  line-height: 27px;
  color: #777777;
  margin-right: 10px;
  display: inline-block;
}

.login-register .forgot a {
  color: #f36371;
}

.login-register li a {
  color: #777777;
  transition: all 500ms ease;
}

.login-register li:hover a {
  color: #f36371;
  transition: all 500ms ease;
}
.thm-btn {
  position: relative;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  z-index: 1;
  padding: 10px 25px;
  text-align: center;
  display: inline-block;
  text-transform: capitalize;
  transition: all 0.5s ease 0s;
  font-family: "Montserrat", sans-serif;
}

.thm-btn:before {
  position: absolute;
  content: "";
  left: 0;
  opacity: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background-color: #2b2c36;
  transform: scale(0.5, 1);
  transition: all 0.4s ease 0s;
}

.thm-btn:hover::before {
  opacity: 1;
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);
}

.thm-btn:hover {
  color: #fff;
}

.bg-clr1 {
  background: #f36371;
  color: #fff;
}

.bg-clr2 {
  position: relative;
  background: #f9be4d;
  color: #333333;
}

.bg-clr2:before {
  position: absolute;
  content: "";
  left: 0;
  opacity: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background-color: #f36371;
  transform: scale(0.5, 1);
  transition: all 0.4s ease 0s;
}

.bg-clr2:hover:before {
  opacity: 1;
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);
}
</style>
