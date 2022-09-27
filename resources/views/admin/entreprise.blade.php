@extends('layouts.main')

@section('etudiant')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Actions</h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/etudiants')}}"><i class="bx bx-user me-1"></i> Etudiants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" href="javascript:void(0);" >
              <i class="bx bxs-business me-1"></i>Entreprises</a>
          </li>
        </ul>


        <!-- Bordered Table -->
        <div class="card">
          <h5 class="card-header"></h5>
          <div class="card-body">
            <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Photo Profil</th>
                    <th>Numéro IFU</th>
                    <th>Nom</th>
                    <th>Secteur</th>
                    <th>Email</th>
                    <th>Téléphones</th>
                    <th>Action 1</th>
                    <th>Action 2</th>
                    <th>Action 3</th>
                    <th>Suppression du compte</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($entreprises as $entreprise)
                  <tr>
                    <td>
                      <center><img src="{{asset('uploads/images/' . $entreprise->logo_path)}}" height="100px" width="95px" alt="" /> </center>
                    </td>
                    <td>IFU: {{$entreprise->matricule}}</td>
                    <td>
                      <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$entreprise->name}}</strong>
                    </td>

       
                    <td>{{$entreprise->filiere_secteur}}</td>
                    <td>{{$entreprise->email}}</td>
                    <td>{{$entreprise->telephone}}</td>

                    <td>
                      <a href="{{url('etudiant/etudiant_postulation')}}" class="btn btn-info"><i class="bx bx-show me-1"></i> Autres détails</a>
                    </td>
                    <td>
                      <a href="" class="btn btn-success"><i class="bx bx-check-circle me-1"></i> Activer</a>

                    </td>
                    <td>

                      <a href="" class="btn btn-danger"><i class="bx bx-x-circle me-1"></i> Désactiver</a>
                    </td>
                    <td>

                      <a href="" class="btn btn-danger"><i class="bx bx-trash me-1"></i> Supprimer</a>
                    </td>
                  </tr>
                  @empty
                  <div class="alert alert-success">Aucuns Etudiants</div>
                  @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--/ Bordered Table -->

      </div>
    </div>
  </div>
  <!-- / Content -->

  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        , made with ❤️ by
        <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">M&H</a>
      </div>
      <div>
        <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

  <div class="content-backdrop fade"></div>
</div>
@endsection