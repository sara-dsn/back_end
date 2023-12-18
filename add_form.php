
<?php include 'header.php'; ?>

<div class="text center font-weight-bold " ><h1>Ajouter un vinyle</h1> </div>
<div class=" container-fluid ">
<form action="add_script.php" methode="POST" class="w-100 mt-4">
    <div class="form-row w-100">
        <div class="col-6">
        <label for="title"  ><h2>Title</h2></label><br>
        <input type="text" class="w-75" placeholder="Enter Title"><br>
        </div>
        <div class="col-6">
        <label for="artist"><h2>Artist</h2></label><br>
        <select name="1" class="w-75" id="1"></select>
        </div>
    </div>
    <div class="form-row  w-100">
    <div class="col-6">
        <label for="year"><h2>Year</h2></label><br>
        <input type="text" class="w-75"  placeholder="Enter Year"><br>
        </div>
        <div class="col-6">
        <label for="genre"  ><h2>Genre</h2></label><br>
        <input type="text" class="w-75" placeholder="Enter genre (Rock, Pop, Prog ...)"><br>
        </div>
    </div>
    <div class="form-row w-100">
    <div class="col-6">
        <label for="label"><h2>Label</h2></label><br>
        <input type="text" class="w-75"  placeholder=" Enter Lable(EMI, Warner, PolyGram, Univers sale ...)"><br>
        </div>
        <div class="col-6 mb-4">
        <label for="price"><h2>Price</h2></label><br>
        <input type="text" class="w-75"><br>
        </div>
    </div>
    <div class="form-row w-100">
    <div class="col-12">
        <label type="picture" class="mr-4" ><h2>Picture</h2></label>
        <input type="file" class="w-75 mb-4"><br>
        </div>

</div>
    <div class="row w-100 d-flex justify-content-center">
        <button type="submit" class="mr-4 rounded bg-dark text-light btn-lg" >Ajouter</button>
        <button type="delete" class="ml-4 rounded bg-dark text-light btn-lg">Retour</button>
    </div>
</form>
</div>
<?php include 'footer.php'; ?>