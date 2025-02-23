<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/admin_dash"><img src="{{'aminTech.png'}}" width="50px" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/user_manage">User Management</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/add_edit_product">Add/Edit Product</a>
          <a class="dropdown-item" href="/product_list">Product List</a>
          <a class="dropdown-item" href="/product_import">Import Product</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/contact_manage">Contact Management</a>
      </li>
    </ul>
      <a class="btn btn-danger my-2 my-sm-0" href="/logout">Logout</a>
  </div>
</nav>