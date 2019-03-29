
<template lang="">
<section>

<div v-show="isShowing" id="er">
         <div class="table-responsive mt-4" >
                          <table class="table table-bordered table-centered mb-0">
                              <thead class="thead-light">
                                  <tr>
                                      <th>Outlets</th>
                                      <th>Price</th>
                                      <th>Stock</th>
                                      <th>Revenue</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>ASOS Ridley Outlet - NYC</td>
                                      <td>$139.58</td>
                                      <td>
                                          <div class="progress-w-percent mb-0">
                                              <span class="progress-value">478 </span>
                                              <div class="progress progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>$1,89,547</td>
                                  </tr>
                                  <tr>
                                      <td>Marco Outlet - SRT</td>
                                      <td>$149.99</td>
                                      <td>
                                          <div class="progress-w-percent mb-0">
                                              <span class="progress-value">73 </span>
                                              <div class="progress progress-sm">
                                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>$87,245</td>
                                  </tr>
                                  <tr>
                                      <td>Chairtest Outlet - HY</td>
                                      <td>$135.87</td>
                                      <td>
                                          <div class="progress-w-percent mb-0">
                                              <span class="progress-value">781 </span>
                                              <div class="progress progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>$5,87,478</td>
                                  </tr>
                                  <tr>
                                      <td>Nworld Group - India</td>
                                      <td>$159.89</td>
                                      <td>
                                          <div class="progress-w-percent mb-0">
                                              <span class="progress-value">815 </span>
                                              <div class="progress progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>$55,781</td>
                                  </tr>
                              </tbody>
                          </table>
                        </div>
                      </div>
                         <button @click="isShowing ^= true">Click Me</button> 
                        
                   

</section>
</template>
<script>  
Vue.component('er', {
    data: function() {
         return  {
           usuario: [],
            isShowing: false,
         }
    },


        
  
 });
          
      console.log('lsd');  


</script>
