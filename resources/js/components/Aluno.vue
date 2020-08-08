<template>
   <div>
      <div class="container">
         <h1 id="titulo" class="text-center">Formulário de Cadastro</h1>
         <div class="row justify-content-center">
            <div class="col-md-2">
               
               <div class="row">
                 <div class="card">                           
                    <img src="https://images.opencollective.com/vuejs/25a8146/logo/256.png" class="img-thumbnail" alt="Logo" width="200" height="200" style="height: 200px;">                
                 </div>
                </div>               
            </div>
            <div class="col-md-10">
               <form>
                  <div class="form-row">
                     <div class="form-group col-md-6">                  
                        <input type="text" class="form-control" id="nome_completo" v-model="aluno.nome" placeholder="Nome Completo">
                     </div>
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="cpf"  v-model="aluno.cpf" placeholder="CPF">
                     </div>
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="rg" v-model="aluno.rg" placeholder="RG">
                     </div>
                     <div class="form-group col-md-2">
                        <select id="inputSexo" class="form-control" v-model="aluno.sexo_selected">
                          <option disabled value="">Sexo</option>  
                          <option value="masculino">Masculino</option>
                          <option value="feminino">Feminino</option>
                        </select>                                               
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4">                  
                        <input type="text" class="form-control" id="email" v-model="aluno.email" placeholder="Email">
                     </div>
                     <div class="form-group col-md-3">                  
                        <input type="text" class="form-control" id="telefone" v-model="aluno.telefone" placeholder="Telefone">
                     </div>
                     <div class="form-group col-md-3">                  
                        <input type="text" class="form-control" id="data_nascimento" v-model="aluno.data_nascimento" placeholder="Data de nascimento" onfocus="(this.type='date')"
                        > 
                     </div>
                     
                     <div class="form-group col-md-2">

                      <select id="inputIdioma" class="form-control" v-model="aluno.idioma_selected">
                          <option value="pt-BR">Portugês (pt-BR)</option>
                          <option value="en-US">English (en-US)</option>
                        </select>                 
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="cep" v-model="aluno.cep" placeholder="CEP">
                     </div>
                     <div class="form-group col-md-4">                  
                        <input type="text" class="form-control" id="rua" v-model="aluno.rua" placeholder="Rua">
                     </div>
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="numero" v-model="aluno.numero" placeholder="Número">
                     </div>
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="quadra" v-model="aluno.quadra" placeholder="Quadra">
                     </div>
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="lote" v-model="aluno.lote" placeholder="Lote">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-5">                  
                        <input type="text" class="form-control" id="complemento" v-model="aluno.complemento" placeholder="Complemento">
                     </div>
                     <div class="form-group col-md-4">                  
                        <input type="text" class="form-control" id="bairro" v-model="aluno.bairro" placeholder="Bairro">
                     </div>
                     <div class="form-group col-md-2">                  
                        <input type="text" class="form-control" id="cidade" v-model="aluno.cidade" placeholder="Cidade">
                     </div>
                     <div class="form-group col-md-1">
                        <select id="inputIdioma" class="form-control" v-model="aluno.uf_selected">
                          <option disabled value="">UF</option>
                          <option>AC</option>
                          <option>AL</option>
                          <option>AM</option>
                          <option>AP</option>
                          <option>BA</option>
                          <option>CE</option>
                          <option>DF</option>
                          <option>ES</option>
                          <option>GO</option>
                          <option>MA</option>
                          <option>MG</option>
                          <option>MS</option>
                          <option>MT</option>
                          <option>PA</option>
                          <option>PB</option>
                          <option>PE</option>
                          <option>PI</option>
                          <option>PR</option>
                          <option>RJ</option>
                          <option>RN</option>
                          <option>RO</option>
                          <option>RR</option>
                          <option>RS</option>
                          <option>SC</option>
                          <option>SE</option>
                          <option>SP</option>
                          <option>TO</option>
                        </select>                     
                     </div>
                  </div>
                  
                <div v-if="getAge(aluno.data_nascimento)>=12" class="row float-right">
                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                    <div v-if="aluno.id == null || aluno.id == ''" class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary" 
                      :disabled="aluno.nome == ''|| aluno.cpf == '' || aluno.sexo_selected == '' || aluno.data_nascimento == '' || aluno.idioma_selected == ''"
                      @click="salvarAluno">Salvar</button>
                    </div>

                    <div v-else class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary" 
                      :disabled="aluno.nome == ''|| aluno.cpf == '' || aluno.sexo_selected == '' || aluno.data_nascimento == '' || aluno.idioma_selected == ''"
                      @click="modalAtualizarAluno">Atualizar</button>
                    </div>

                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                      <button type="button" class="btn btn-secondary" @click="limparFormulario">Cancelar</button>
                    </div>

                  </div>
                </div>
                <div v-show="getAge(aluno.data_nascimento)<12" class="alert alert-danger" role="alert">
                  Não é permitido o cadastro de alunos com idade menor do que 12 anos!
                </div>
                <div v-show="aluno.nome == ''|| aluno.cpf == '' || aluno.sexo_selected == '' || aluno.data_nascimento == '' || aluno.idioma_selected == ''" class="alert alert-primary" role="alert">
                  Os campos a seguir são obrigatórios: cpf, nome, sexo, data de nascimento, idioma.                  
                </div>
                  <br>
                  <br>                                          
               </form>
            </div>
         </div>
      </div>
      <hr>
      <div class="container">
         <form>
            <br>
            <div class="row float-right">                                                                     
              <input type="text" class="form-control" id="buscaAluno" v-model="busca" placeholder="Busca...">
            </div>
            <br>
            <br>
         </form>
      </div>

      <div class="container">
        <div class="row">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li @click="montarTabelaAtivos" class="nav-item active">
              <a class="nav-link active" id="cadA" data-toggle="tab" href="#cadastrosA" role="tab"
                aria-controls="cadA" aria-selected="true">Ativos</a>
            </li>
            <li @click="montarTabelaCancelados" class="nav-item">
              <a class="nav-link" id="cadE" data-toggle="tab" href="#cadastrosC" role="tab"
                aria-controls="cadE" aria-selected="false">Cancelados</a>
            </li>
          </ul>
        </div>
      </div>
      

      <div class="container">
         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">CPF</th>
                  <th scope="col">Idade</th>
                  <th v-show="!showDetados" scope="col">Ações</th>
               </tr>
            </thead>
            <tbody v-for="aluTab in list">
               <tr>
                  <td>{{aluTab.nome}}</td> 
                  <td>{{aluTab.cpf}}</td>
                  <td>{{getAge(aluTab.data_nascimento)}}</td>
                  <td v-show="!showDetados">
                    <button type="button" class="btn btn-primary btn-sm" @click="editarAluno(aluTab.id)">Editar</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" @click="modalExcluirAluno(aluTab.id)">Excluir</button>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>

      <!--Area de Modal-->
      <div class="container">
         
         <!-- Modal -->
         <div class="modal fade" id="modalExcluir" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Confirmar</h5>
                  </div>
                  <div class="modal-body">
                     <p>Deseja realmente excluir este aluno ?</p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" @click="excluirAluno(alunoIdPExclusao)" data-dismiss="modal">Sim</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>      
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         
         <!-- Modal -->
         <div class="modal fade" id="modalAtualizar" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Confirmar</h5>
                  </div>
                  <div class="modal-body">
                     <p>Deseja realmente atualizar o cadastro do aluno?</p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" @click="atualizarAluno(aluno.id)" data-dismiss="modal">Sim</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         
         <!-- Modal -->
         <div class="modal fade" id="modalSucesso" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Sucesso</h5>
                  </div>
                  <div class="modal-body">
                     <p>Aluno cadastrado com sucesso !</p>
                  </div>
                  <div class="modal-footer">          
                     <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>



<script>
  export default {
    data(){
      return {        
        alunosTable :[],
        showDetados: false,
        alunoIdPExclusao: "",
        busca:"",        
        aluno: {
          id: "",
          nome: "",
          cpf: "",
          rg: "",
          email: "",
          telefone: "",
          data_nascimento: "",
          cep: "",
          rua: "",
          numero: "",
          quadra: "",
          lote: "",
          complemento: "",
          bairro: "",
          cidade: "",
          uf_selected: "",
          sexo_selected: "",
          idioma_selected: "",
          deleted_at: null,
        },
      }
    },
    created() { 
      this.aluno.idioma_selected = navigator.language;
      
    },
    mounted() {      
      axios.get('./api/aluno/ativos')
        .then(response => this.alunosTable = response.data);
    },
    computed: {
      list() {
        const filter = this.busca;
        const list = _.orderBy(this.alunosTable, 'nome', 'asc');

        if (_.isEmpty(filter)||(filter.length<3)) {
          return list;
        }

        return _.filter(list, aluTab => aluTab.nome.indexOf(filter) >= 0);
      }
    },

    methods:{            
      limparFormulario(){
        this.busca = ""        
        this.aluno.id = ""
        this.aluno.nome = ""
        this.aluno.cpf = ""
        this.aluno.rg = ""
        this.aluno.email = ""
        this.aluno.telefone = ""
        this.aluno.data_nascimento = ""
        this.aluno.cep = ""
        this.aluno.rua = ""
        this.aluno.numero = ""
        this.aluno.quadra = ""
        this.aluno.lote = ""
        this.aluno.complemento = ""
        this.aluno.bairro = ""
        this.aluno.cidade = ""
        this.aluno.uf_selected = ""
        this.aluno.sexo_selected = ""
        this.aluno.idioma_selected = navigator.language
        document.querySelector("#data_nascimento").type = 'text'    
      },
      getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
      },
      montarTabelaAtivos(){        
        axios.get('./api/aluno/ativos')
        .then(response => this.alunosTable = response.data);
        this.showDetados = false;
        this.busca = "";
      },
      montarTabelaCancelados(){        
        axios.get('./api/aluno/excluidos')
        .then(response => this.alunosTable = response.data);
        this.showDetados = true;
        this.busca = "";
      },
      


      salvarAluno() {
        var self = this;
                  
        axios.post('./api/aluno', {            
          nome: this.aluno.nome,
          cpf: this.aluno.cpf,
          rg: this.aluno.rg,
          email: this.aluno.email,
          telefone: this.aluno.telefone,
          data_nascimento: this.aluno.data_nascimento,
          cep: this.aluno.cep,
          rua: this.aluno.rua,
          numero: this.aluno.numero,
          quadra: this.aluno.quadra,
          lote: this.aluno.lote,
          complemento: this.aluno.complemento,
          bairro: this.aluno.bairro,
          cidade: this.aluno.cidade,
          uf_selected: this.aluno.uf_selected,
          sexo_selected: this.aluno.sexo_selected,
          idioma_selected: this.aluno.idioma_selected          
          })
          .then(function (response) {             
            self.limparFormulario();
            self.montarTabelaAtivos();
            $("#modalSucesso").modal();                                   
            console.log(response);            
          })
          .catch(function (error) {
            console.log(error);
          });          
        },
        editarAluno(id){
          var self = this;
          axios.get('./api/aluno/'+id)
          .then(function(response){
            window.location.href='#titulo';            
            self.aluno.id = response.data.id
            self.aluno.nome = response.data.nome
            self.aluno.cpf = response.data.cpf
            self.aluno.rg = response.data.rg
            self.aluno.email = response.data.email
            self.aluno.telefone = response.data.telefone
            self.aluno.data_nascimento = response.data.data_nascimento
            self.aluno.cep = response.data.cep
            self.aluno.rua = response.data.rua
            self.aluno.numero = response.data.numero
            self.aluno.quadra = response.data.quadra
            self.aluno.lote = response.data.lote
            self.aluno.complemento = response.data.complemento
            self.aluno.bairro = response.data.bairro
            self.aluno.cidade = response.data.cidade
            self.aluno.uf_selected = response.data.uf_selected
            self.aluno.sexo_selected = response.data.sexo_selected
            self.aluno.idioma_selected = response.data.idioma_selected
            self.aluno.deleted_at = response.data.deleted_at
          })
          .catch(function (error) {
              console.log(error);
          }); 
        },
        modalExcluirAluno(id){
          var self = this;
          self.alunoIdPExclusao = id;          
          $("#modalExcluir").modal();
        },
        excluirAluno(id){
          var self = this;                    
          axios.delete('./api/aluno/'+id)
            .then(function (response) {
               self.limparFormulario();
               self.montarTabelaAtivos();              
            })
            .catch(function (error) {
              console.log(error);
            });
        },
        modalAtualizarAluno(id){
          var self = this;                  
          $("#modalAtualizar").modal();
        },
        atualizarAluno(id){
          var self = this;
          $("#modalAtualizar").modal();
          axios.put('./api/aluno/'+id, {            
            nome: self.aluno.nome,
            cpf: self.aluno.cpf,
            rg: self.aluno.rg,
            email: self.aluno.email,
            telefone: self.aluno.telefone,
            data_nascimento: self.aluno.data_nascimento,
            cep: self.aluno.cep,
            rua: self.aluno.rua,
            numero: self.aluno.numero,
            quadra: self.aluno.quadra,
            lote: self.aluno.lote,
            complemento: self.aluno.complemento,
            bairro: self.aluno.bairro,
            cidade: self.aluno.cidade,
            uf_selected: self.aluno.uf_selected,
            sexo_selected: self.aluno.sexo_selected,
            idioma_selected: self.aluno.idioma_selected          
          })
          .then(function (response) {             
            self.limparFormulario();
            self.montarTabelaAtivos();
            $("#modalSucesso").modal();                                   
            console.log(response);            
          })
          .catch(function (error) {
            console.log(error);
          });
        },
    }
  }
</script>


<style>
  body {
      margin-top: 10px;
  }
</style>