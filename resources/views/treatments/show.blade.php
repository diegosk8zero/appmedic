<x-showlayout>
    
    <!-- Hero Section -->
    <section id="doctors" class="doctors section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Médicos</h2>
        <p>Conheça nossos especialistas e suas áreas de atuação.</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card team-member d-flex flex-column align-items-center text-center p-3">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$medic->name}}</h4>
                <span>Cardiologista</span>
                <p><i class="bi bi-envelope"></i> <a href="mailto:joao.silva@example.com">{{$medic->email}}</a></p>
                <p><i class="bi bi-telephone"></i> {{$medic->phone}}</p>
                <p><i class="bi bi-telephone"></i> {{$medic->phone_2}}</p>
                <p><i class="bi bi-file-medical"></i> {{$medic->certification}}</p>
                <h5>Convênios Aceitos:</h5>
                <ul>
                  <li>Unimed</li>
                  <li>Bradesco Saúde</li>
                  <li>Amil</li>
                </ul>
                <div class="social-links">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="150">
            <div class="card doctor-details p-4">
              <h4>Descrição</h4>
              <p>{{$medic->description}}</p>
              <h4>Expertises</h4>
              <ul>
                <li>Cardiologia clínica</li>
                <li>Ecocardiografia</li>
                <li>Tratamento de hipertensão</li>
              </ul>
              <h4>Doenças Tratadas</h4>
              <ul>
                <li>Hipertensão
                  <ul>
                    <li>Tratamento medicamentoso e acompanhamento clínico</li>
                  </ul>
                </li>
                <li>Arritmia
                  <ul>
                    <li>Controle com medicação e procedimentos minimamente invasivos</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="blog" class="blog section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Últimos Posts</h2>
        <p>Confira os conteúdos mais recentes do nosso blog.</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="blog-post">
              <h4>Como cuidar do coração?</h4>
              <p>Dicas essenciais para manter a saúde cardiovascular em dia.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-post">
              <h4>Cuidados com a pele no verão</h4>
              <p>Descubra como proteger sua pele dos danos causados pelo sol.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-post">
              <h4>Alimentação saudável</h4>
              <p>Saiba quais alimentos ajudam a fortalecer seu sistema imunológico.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-showlayout>