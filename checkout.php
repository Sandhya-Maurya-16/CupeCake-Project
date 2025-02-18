
<?php
include('header.php');
?>
    <!-- header end -->
    <section class="blog-title">
        <div class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="breadcrumb__text">
                            <h2>Blog</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container checkout-list">
        
        <div class="row g-4 d-flex justify-content-center">
         <div class="col-lg-8 billng-details">
             <div class="coupon">Have a coupon? Click here to enter your code</div>
             <div class="billing mt-5">BILLING DETAILS</div>
             <form>
               <div class="row">
                 <div class="mb-3 col">
                     <label class="form-label">First Name <span>*</span>
                     </label>
                     <input type="text" class="form-control">
                 </div>
                 <div class="mb-3 col">
                     <label class="form-label">Last Name <span>*</span></label>
                     <input type="text" class="form-control" >
                 </div>
               </div>
                 <div class="mb-3">
                     <label class="form-label">Country <span>*</span></label>
                     <input type="text" class="form-control">
                 </div>
                 <div class="mb-3">
                     <label class="form-label">Address <span>*</span></label>
                     <input type="text" class="form-control" placeholder="Street Address">
                 </div>
                 <div class="mb-3">
                     <input type="text" class="form-control" placeholder="Apartment, suite, unit etc (optional)">
                 </div>
                 <div class="mb-3">
                     <label class="form-label">Town/City<span>*</span></label>
                     <input type="text" class="form-control">
                 </div>
                 <div class="mb-3">
                     <label class="form-label">Country/state <span>*</span></label>
                     <input type="text" class="form-control">
                 </div>
                 <div class="mb-3">
                     <label class="form-label">Postcode/ZIP <span>*</span></label>
                     <input type="text" class="form-control">
                 </div>
                 <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="createAccount">
                     <label class="form-check-label" for="createAccount">Create an account?</label>
                 </div>
                 <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                 <div class="mb-3">
                     <label class="form-label">Account Password <span>*</span></label>
                     <input type="password" class="form-control">
                 </div>
                 <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="orderNote">
                     <label class="form-check-label" for="orderNote">Note about your order, e.g., special note for delivery</label>
                 </div>
                 <div class="mb-3">
                     <label class="form-label">Order notes <span>*</span></label>
                     <textarea class="form-control" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                 </div>
             </form>
             </div>
             <div class="col-lg-4 ">
                 <div class="order-summary">
                     <h3>YOUR ORDER</h3>
         
                     <div class="product-item">
                         <div class="product-name">01. Vanilla salted caramel</div>
                         <div class="product-price">$ 300.0</div>
                     </div>
                     <div class="product-item">
                         <div class="product-name">02. German chocolate</div>
                         <div class="product-price">$ 170.0</div>
                     </div>
                     <div class="product-item">
                         <div class="product-name">03. Sweet autumn</div>
                         <div class="product-price">$ 170.0</div>
                     </div>
                     <div class="product-item">
                         <div class="product-name">04. Gluten free mini dozen</div>
                         <div class="product-price">$ 110.0</div>
                     </div>
         
                     <div class="totals">
                         <div class="totals-item">
                             <div>Subtotal</div>
                             <div>$750.99</div>
                         </div>
                         <div class="totals-item">
                             <div>Total</div>
                             <div>$750.99</div>
                         </div>
                     </div>
         
                     <div class="create-account">
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" id="createAccountCheck">
                             <label class="form-check-label" for="createAccountCheck">
                                 Create an account?
                             </label>
                         </div>
                         <div class="placeholder-text">
                             Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt ut labore et dolore.
                         </div>
                     </div>
                 </div>
               <div class="payment-options">
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" id="checkPayment">
                       <label class="form-check-label" for="checkPayment">
                           Check Payment
                       </label>
                   </div>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" id="paypal">
                       <label class="form-check-label" for="paypal">
                           Paypal
                       </label>
                   </div>
         
                   <button class="place-order-button">
                       PLACE ORDER
                   </button>
               </div>
             </div>
         
        </div>
     
     </div>


    
 <!-- footer -->
 
<?php
include('footer.php');
?>