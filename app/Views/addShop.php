<div class="col s12">
    <div class="card animate fadeUp">
        <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
        <div class="card-content">
            <div class="row" id="product-four">
                <!-- images -->
                <div class="col m6 s12">
                    <img src="../../../app-assets/images/cards/remote.png" class="responsive-img" alt="">
                </div>

                <div class="col m6 s12">
                    <!-- nom vendeur -->
                    <p>mon du vendeur</p>
                    <!-- name produit-->
                    <h5>MON PRODUIT</h5>
                    <!-- Qualiter - stock -->
                    <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                    <p>Availability: <span class="green-text">Available</span></p>
                    <p>Categorie: <span class="green-text">Categorie</span></p>
                    <!-- ---------------------------------------------------------------------- -->
                    <hr class="mb-5">
                    <!-- ---------------------------------------------------------------------- -->
                    <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                    <!-- description -->
                    <ul class="list-bullet">
                        <li class="list-item-bullet">Dual output USB interfaces</li>
                        <li class="list-item-bullet">Compatible with all smartphones</li>
                        <li class="list-item-bullet">Portable design and light weight</li>
                        <li class="list-item-bullet">Battery type: Lithium-ion</li>
                    </ul>
                    <!-- prix -->
                    <h5 class="red-text">$79.00 <span class="grey-text lighten-2 ml-3">$199.00</span> </h5>
                    <!-- mode de payement -->
                    <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 mt-2 mr-2">ADD TO
                        CART</a>
                    <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange z-depth-4 mt-2">BUY NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="<?= base_url('/addShop/save'); ?>"class="formValidate0" id="formValidate0" method="POST">
    <div class="row">
        <!-- images -->
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" name="file" type="text" placeholder="Upload one or more files">
            </div>
        </div>

        <!-- nom vendeur -->
        <div class="input-field col s12">
            <label for="vendeur0">Vendeur *</label>
            <input class="validate" required id="vendeur0" name="vendeur0" type="text">
        </div>
        <!-- name produit-->
        <div class="input-field col s12">
            <label for="produit">Name Produit *</label>
            <input class="validate" required id="produit" name="produit" type="text">
        </div>
        <!-- Qualiter - stock -->

        <!-- categorie -->
        <div class="col s12">
            <label for="categorie">Categorie *</label>
            <select class="error validate" id="categorie" name="categorie" required>
                <option value="" disabled selected>Choose your profile</option>
                <option value="1">Wathes</option>
                <option value="2">tabblets</option>
                <option value="3">laptops</option>
                <option value="4">phones</option>
            </select>
            <div class="input-field">
            </div>
        </div>
        <!-- favori -->


        <!-- description -->
        <div class="input-field col s12">
            <textarea id="ccomment0" name="ccomment0" class="materialize-textarea validate" required></textarea>
            <label for="ccomment0">Your comment *</label>
        </div>
        <!-- prix -->
        <div class="input-field col s12">
            <label for="prix0">Prix *</label>
            <input class="validate" required id="prix0" name="prix0" type="text">
        </div>

        <!-- mode de payement -->

        <!-- validation -->
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>


