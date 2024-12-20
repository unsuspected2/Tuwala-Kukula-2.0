@extends('Visitantes.layouts.app')
@section('content')
    <main class="main">
     <br><br>
    
    <section>

     <div class="container my-5">
       <h1 class="text-center mb-4">Instituições de Ensino Médio</h1>
       
        <div class="container my-5 ">
         <div class="bg-light p-4 rounded shadow-sm">
           <h5 class="mb-4">Pesquisar Escolas de Ensino Médio</h5>
           <form>
             <div class="row g-3">
               <!-- Província -->
               <div class="col-md-4">
                 <label for="provincia" class="form-label">Província</label>
                 <select id="provincia" class="form-select" required>
                   <option value="" selected disabled>Selecione uma província</option>
                   <option value="bengo">Bengo</option>
                   <option value="benguela">Benguela</option>
                   <option value="bié">Bié</option>
                   <option value="cabinda">Cabinda</option>
                   <option value="cuando-cubango">Cuando Cubango</option>
                   <option value="cuanza-norte">Cuanza Norte</option>
                   <option value="cuanza-sul">Cuanza Sul</option>
                   <option value="cunene">Cunene</option>
                   <option value="huambo">Huambo</option>
                   <option value="huila">Huíla</option>
                   <option value="luanda">Luanda</option>
                   <option value="luanda-norte">Lunda Norte</option>
                   <option value="luanda-sul">Lunda Sul</option>
                   <option value="malanje">Malanje</option>
                   <option value="moxico">Moxico</option>
                   <option value="namibe">Namibe</option>
                   <option value="uige">Uíge</option>
                   <option value="zaire">Zaire</option>
                 </select>
               </div>
               <!-- Área de Estudo -->
               <div class="col-md-4">
                 <label for="area-estudo" class="form-label">Área de Estudo</label>
                 <select id="area-estudo" class="form-select" required>
                   <option value="" selected disabled>Selecione a área de estudo</option>
                   <option value="ciencias-fisicas">Ciências Físicas e Biológicas</option>
                   <option value="ciencias-humanas">Ciências Humanas e Sociais</option>
                   <option value="ciencias-economicas">Ciências Econômicas e Jurídicas</option>
                   <option value="tecnico-profissional">Técnico-Profissional</option>
                   <option value="artes-letras">Artes e Letras</option>
                   <option value="formacao-professores">Formação de Professores</option>
                   <option value="outras">Outras</option>
                 </select>
               </div>
               <!-- Tipo de Escola -->
               <div class="col-md-4">
                 <label for="tipo-escola" class="form-label">Tipo de Escola</label>
                 <select id="tipo-escola" class="form-select" required>
                   <option value="" selected disabled>Selecione o tipo de escola</option>
                   <option value="publica">Pública</option>
                   <option value="privada">Privada</option>
                 </select>
               </div>
             </div>
             <!-- Botão de Pesquisa -->
             <div class="d-grid mt-4">
               <button type="submit" class="btn btn-primary">Pesquisar</button>
             </div>
           </form>
         </div>
       </div>
  
       <div class="row row-cols-1 row-cols-md-3 g-4">

        
         <!-- Card 1 -->
         <div class="col">
           <div class="card">
             <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
             <div class="card-body">
               <h5 class="card-title">ITEL - Instituto de Telecomunicações.</h5>
               <p class="card-text">Poucos, mas bons.</p>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Saber mais</button>
             </div>
           </div>
         </div>
         
         <!-- Modal 1 -->
         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <!-- Botão de Fechar -->
               <button 
                 type="button" 
                 class="btn-close position-absolute top-0 end-0 m-2" 
                 data-bs-dismiss="modal" 
                 aria-label="Close">
               </button>
               
               <!-- Imagem -->
               <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
               
               <!-- Conteúdo do Modal -->
               <div class="modal-header">
                 <h5 class="modal-title" id="modal1Label">Mais Informações - Card 1</h5>
               </div>
               <div class="modal-body">
                 Detalhes adicionais sobre o card 1. Aqui você pode inserir mais texto ou elementos visuais.
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>

          <!-- Card 1 -->
          <div class="col">
           <div class="card">
             <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
             <div class="card-body">
               <h5 class="card-title">Título 1</h5>
               <p class="card-text">Descrição breve do card 1.</p>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Saber mais</button>
             </div>
           </div>
         </div>
         
         <!-- Modal 1 -->
         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <!-- Botão de Fechar -->
               <button 
                 type="button" 
                 class="btn-close position-absolute top-0 end-0 m-2" 
                 data-bs-dismiss="modal" 
                 aria-label="Close">
               </button>
               
               <!-- Imagem -->
               <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
               
               <!-- Conteúdo do Modal -->
               <div class="modal-header">
                 <h5 class="modal-title" id="modal1Label">Mais Informações - Card 1</h5>
               </div>
               <div class="modal-body">
                 Detalhes adicionais sobre o card 1. Aqui você pode inserir mais texto ou elementos visuais.
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>

          <!-- Card 1 -->
          <div class="col">
           <div class="card">
             <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
             <div class="card-body">
               <h5 class="card-title">Título 1</h5>
               <p class="card-text">Descrição breve do card 1.</p>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Saber mais</button>
             </div>
           </div>
         </div>
         
         <!-- Modal 1 -->
         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <!-- Botão de Fechar -->
               <button 
                 type="button" 
                 class="btn-close position-absolute top-0 end-0 m-2" 
                 data-bs-dismiss="modal" 
                 aria-label="Close">
               </button>
               
               <!-- Imagem -->
               <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
               
               <!-- Conteúdo do Modal -->
               <div class="modal-header">
                 <h5 class="modal-title" id="modal1Label">Mais Informações - Card 1</h5>
               </div>
               <div class="modal-body">
                 Detalhes adicionais sobre o card 1. Aqui você pode inserir mais texto ou elementos visuais.
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>

          <!-- Card 1 -->
          <div class="col">
           <div class="card">
             <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
             <div class="card-body">
               <h5 class="card-title">Título 1</h5>
               <p class="card-text">Descrição breve do card 1.</p>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Saber mais</button>
             </div>
           </div>
         </div>
         
         <!-- Modal 1 -->
         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <!-- Botão de Fechar -->
               <button 
                 type="button" 
                 class="btn-close position-absolute top-0 end-0 m-2" 
                 data-bs-dismiss="modal" 
                 aria-label="Close">
               </button>
               
               <!-- Imagem -->
               <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
               
               <!-- Conteúdo do Modal -->
               <div class="modal-header">
                 <h5 class="modal-title" id="modal1Label">Mais Informações - Card 1</h5>
               </div>
               <div class="modal-body">
                 Detalhes adicionais sobre o card 1. Aqui você pode inserir mais texto ou elementos visuais.
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>

          <!-- Card 1 -->
          <div class="col">
           <div class="card">
             <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
             <div class="card-body">
               <h5 class="card-title">Título 1</h5>
               <p class="card-text">Descrição breve do card 1.</p>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Saber mais</button>
             </div>
           </div>
         </div>
         
         <!-- Modal 1 -->
         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <!-- Botão de Fechar -->
               <button 
                 type="button" 
                 class="btn-close position-absolute top-0 end-0 m-2" 
                 data-bs-dismiss="modal" 
                 aria-label="Close">
               </button>
               
               <!-- Imagem -->
               <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
               
               <!-- Conteúdo do Modal -->
               <div class="modal-header">
                 <h5 class="modal-title" id="modal1Label">Mais Informações - Card 1</h5>
               </div>
               <div class="modal-body">
                 Detalhes adicionais sobre o card 1. Aqui você pode inserir mais texto ou elementos visuais.
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>

          <!-- Card 1 -->
          <div class="col">
           <div class="card">
             <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
             <div class="card-body">
               <h5 class="card-title">Título 1</h5>
               <p class="card-text">Descrição breve do card 1.</p>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Saber mais</button>
             </div>
           </div>
         </div>
         
         <!-- Modal 1 -->
         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <!-- Botão de Fechar -->
               <button 
                 type="button" 
                 class="btn-close position-absolute top-0 end-0 m-2" 
                 data-bs-dismiss="modal" 
                 aria-label="Close">
               </button>
               
               <!-- Imagem -->
               <img src="assets/img/1 (1).jpg" class="card-img-top" alt="Imagem do Card 1">
               
               <!-- Conteúdo do Modal -->
               <div class="modal-header">
                 <h5 class="modal-title" id="modal1Label">Mais Informações - Card 1</h5>
               </div>
               <div class="modal-body">
                 Detalhes adicionais sobre o card 1. Aqui você pode inserir mais texto ou elementos visuais.
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>



       </div>
     </div>
     
     <style>
      .search-button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
      }
      </style>
      
      <div class="container my-0">
      <!-- Botão Pesquisar -->
      <div class="text-center">
        <button type="button" class="btn btn-primary search-button" data-bs-toggle="modal" data-bs-target="#searchModal">
          <i class="bi bi-search"></i> Pesquisar
        </button>
      </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="searchModalLabel">Pesquisar Escolas de Ensino Médio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row g-3">
                <!-- Província -->
                <div class="col-md-4">
                  <label for="provincia" class="form-label">Província</label>
                  <select id="provincia" class="form-select" required>
                    <option value="" selected disabled>Selecione uma província</option>
                    <option value="bengo">Bengo</option>
                    <option value="benguela">Benguela</option>
                    <option value="bié">Bié</option>
                    <option value="cabinda">Cabinda</option>
                    <option value="cuando-cubango">Cuando Cubango</option>
                    <option value="cuanza-norte">Cuanza Norte</option>
                    <option value="cuanza-sul">Cuanza Sul</option>
                    <option value="cunene">Cunene</option>
                    <option value="huambo">Huambo</option>
                    <option value="huila">Huíla</option>
                    <option value="luanda">Luanda</option>
                    <option value="luanda-norte">Lunda Norte</option>
                    <option value="luanda-sul">Lunda Sul</option>
                    <option value="malanje">Malanje</option>
                    <option value="moxico">Moxico</option>
                    <option value="namibe">Namibe</option>
                    <option value="uige">Uíge</option>
                    <option value="zaire">Zaire</option>
                  </select>
                </div>
                <!-- Área de Estudo -->
                <div class="col-md-4">
                  <label for="area-estudo" class="form-label">Área de Estudo</label>
                  <select id="area-estudo" class="form-select" required>
                    <option value="" selected disabled>Selecione a área de estudo</option>
                    <option value="ciencias-fisicas">Ciências Físicas e Biológicas</option>
                    <option value="ciencias-humanas">Ciências Humanas e Sociais</option>
                    <option value="ciencias-economicas">Ciências Econômicas e Jurídicas</option>
                    <option value="tecnico-profissional">Técnico-Profissional</option>
                    <option value="artes-letras">Artes e Letras</option>
                    <option value="formacao-professores">Formação de Professores</option>
                    <option value="outras">Outras</option>
                  </select>
                </div>
                <!-- Tipo de Escola -->
                <div class="col-md-4">
                  <label for="tipo-escola" class="form-label">Tipo de Escola</label>
                  <select id="tipo-escola" class="form-select" required>
                    <option value="" selected disabled>Selecione o tipo de escola</option>
                    <option value="publica">Pública</option>
                    <option value="privada">Privada</option>
                  </select>
                </div>
              </div>
              <!-- Botão de Submeter -->
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-success">Pesquisar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>

   </section>


   
   
  
 

    </main>
     <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    @include('Visitantes.footer.footer')
@endsection
@include('Visitantes.header.headerVisitantes')
