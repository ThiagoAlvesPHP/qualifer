$(function(){

    $('.phone').mask('(00) 0 0000-0000');
    $('.cep').mask('00000-000');
    $('.cnpj').mask('00.000.000/0000-00');
    $('.cpf').mask('000.000.000-00');
    $('.price').mask('##0.00', {reverse: true});

    //pagina lista de clientes
    $(document).ready(function (){
        $('#customers').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customer/ajax",
                "type": "POST"
            }
        });
    });
    //migrar pedido para outro cliente
    $(document).ready(function(){
        var array = [];
        array['migration'] = true;
        array['id'] = $('#id').val();

        $('#request_customers_migration').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customer/ajax2",
                "type": "POST",
                "data":array
            }
        });
    });
    //fornecedores - lista
    $(document).ready(function (){
        $('#providers').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"providers/ajax",
                "type": "POST"
            }
        });
    });
    //pedido a fornecedor
    $(document).ready(function (){
        let id = $('#id_provider').val();
        var array = [];
        array['id_provider'] = id;
        $('#products_request_provider').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"providers/products",
                "type": "POST",
                "data":array
            }
        });
    });

    $(document).ready(function (){
        $('#products').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"products/ajax",
                "type": "POST"
            }
        });
    });

    //área de pedidos
    $(document).ready(function (){
        $('#products_request').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"request/products",
                "type": "POST"
            }
        });
    });

    $(document).ready(function (){
        $('#customers_request').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"request/ajax",
                "type": "POST"
            }
        });
    });

    $(document).ready(function (){
        $('#requests').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "order": [[ 4, "desc" ]],
            "ajax": {
                "url": url+"request/ajaxList",
                "type": "POST"
            }
        });
    });

    $(document).ready(function (){
        $('#requests_day').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"request/ajaxListDay",
                "type": "POST"
            }
        });
    });

    $(document).ready(function (){
        let id = $('#id_customer').val();
        var array = [];
        array['id_customer'] = id;

        $('#request_customer').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "order": [[ 5, "desc" ]],
            "ajax": {
                "url": url+"customer/ajax",
                "type": "GET",
                "data":array
            }
        });
    });

    //financeiro contas a receber
    $(document).ready(function (){
        var datestart = $('#datestart').val();
        var dateend = $('#dateend').val();

        $('#requests_billreceive').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"financial/ajax",
                "type": "POST",
                "data":[datestart, dateend]
            }
        });
    });
    //contas a pagar
    $(document).ready(function (){
        var array = [];
        array['datestart'] = $('#datestart').val();
        array['dateend'] = $('#dateend').val();

        $('#requests_billpay').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "order": [[ 7, "desc" ]],
            "ajax": {
                "url": url+"financial/ajax",
                "type": "POST",
                "data":array
            }
        });
    });
     //contas a pagar
    $(document).ready(function (){
        var array = [];
        array['id_provider'] = $('#id_provider').val();
        array['datestart'] = $('#datestart').val();
        array['dateend'] = $('#dateend').val();

        $('#requests_providers').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "order": [[ 8, "desc" ]],
            "ajax": {
                "url": url+"providers/ajaxRequests",
                "type": "POST",
                "data":array
            }
        });
    });


    //adicionar novo produto a carrinho
    //área de pedidos
    $(document).ready(function (){
        var array = [];
        array['id_request'] = $('#id').val();
        $('#newAddProduct_request').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"request/addNewProductRequets",
                "type": "POST",
                "data":array
            }
        });
    });

    //verificar consutar 
    $(document).ready(function (){
        var array = [];
        array['datestart'] = $('#datestart').val();
        array['dateend'] = $('#dateend').val();

        $('#requests_check_admin').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"user/ajax",
                "type": "POST",
                "data":array
            }
        });
    });
    //check admin
    $(document).on('click', '.ckeckAdmin', function(){
        var check = $(this).val();

        $.ajax({
            type: 'POST',
            url: url+"user/ajax",
            dataType:'json',
            data:{ check:check },
            success:function(data){
                if(data == false){
                    alert('Já foi removido a verifição! Atualize a pagina');
                }                
            }
        });
    });


    //vincular cliente para pedido
    $(document).on('click', '.id_provider', function(event){
        event.preventDefault();
        let customer = $(this).val().split('/');

        html = '<input type="hidden" value="'+customer[0]+'" name="id_customer"><div class="alert alert-info"><b>Cliente: </b>'+customer[1]+'</div><button class="btn btn-success">Gerar Pedido</button>';
        $('#customer_search').html(html);
    });

    //calculando valor quando alterar o valor de 1 produto
    $(document).on('keyup', '.price_sale_request', function(){
        let sale = $(this).parent().parent();

        var value = sale.find('.price_sale_request').val();
        var qt  = sale.find('.qt_request').val();
        var subtotal = parseFloat(value) * parseInt(qt);

        //subtotal
        $(sale.find('.subtotal')).val(subtotal.toFixed(2));

        var input_value = sale.parent().find('.subtotal');

        var total = 0;
        for (var i = 0; i < input_value.length; i++) {
            total += parseFloat(input_value[i]['value']);
        }

        $('#amount_request').html(total.toFixed(2));
        $('input[name=amount]').val(total.toFixed(2));
        $('#amount').val(total.toFixed(2));
    });

    //alterar valor quando der desconto
    $(document).on('keyup', 'input[name=discount]', function(){
        let discount_porcentage = $(this).val();

        let amount_true = $('input[name=amount_true]').val();
        let amount = $('#amount').val();

        let discount = (parseFloat(discount_porcentage)*parseFloat(amount))/100 ;
        let amount_request = (amount - discount);

        var input_value = $('.subtotal');

        var total = 0;
        for (var i = 0; i < input_value.length; i++) {
            total += parseFloat(input_value[i]['value']);
        }
        
        if (discount_porcentage.length > 0) {
            $('#amount_request').html(amount_request.toFixed(2));
            $('input[name=amount]').val(amount_request.toFixed(2));
        } else {
            $('#amount_request').html(total.toFixed(2));
            $('input[name=amount]').val(total.toFixed(2));
            $('#amount').val(total.toFixed(2));
        }
    });




    //área do conferente
    //check 
    $(document).on('click', '.ckeck', function(){
        var check = $(this).val();

        $(this).attr('disabled', '');
        $(this).attr('checked', '');

        $.ajax({
            type: 'POST',
            url: url+"lecturer/ajax",
            dataType:'json',
            data:{ check:check },
            success:function(data){
                if(data == false){
                    alert('Já foi verificado! Atualize a pagina');
                }                
            }
        });
    });

    //conferente fornecedores
    $(document).ready(function (){
        var array = [];
        array['verify'] = 1;

        $('#providers_lecturer').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"lecturer/ajax",
                "type": "POST",
                "data":array
            }
        });
    });
    //datatable por periodo conferente
    $(document).ready(function (){
        var array = [];
        array['id_provider'] = $('#id').val();
        array['datestart'] = $('#datestart').val();
        array['dateend'] = $('#dateend').val();

        $('#requests_check').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"lecturer/ajax",
                "type": "POST",
                "data":array
            }
        });
    });
    //listar notificações enviadas
    $(document).ready(function (){
        var array = [];
        array['notification'] = true;

        $('#lecturer_notification').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"lecturer/ajax",
                "type": "POST",
                "data":array
            }
        });
    });

    //listar notificações enviadas
    $(document).ready(function (){
        var array = [];
        array['notification'] = true;

        $('#revenues_notification').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"home/ajax",
                "type": "POST",
                "data":array
            }
        });
    });


    //area de orçamento do cliente
    //área de pedidos
    $(document).ready(function (){
        var array = [];
        array['budget'] = true;
        $('#products_budget').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customers/ajax",
                "type": "POST",
                "data":array
            }
        });
    });

    $(document).ready(function (){
        var array = [];
        array['request'] = true;
        array['id_customer'] = $('#id_customer').val();

        $('#request_area_customer').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customers/ajax",
                "type": "POST",
                "data":array
            }
        });        
    });

    $(document).ready(function (){
        let id = $('#id_customer').val();
        var array = [];
        array['budgets'] = true;
        array['id_customer'] = id;

        $('#budgets_area_customer').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customers/ajax",
                "type": "POST",
                "data":array
            }
        });        
    });


    $(document).ready(function (){
        var array = [];
        array['budgets'] = true;
        array['id_customer_admin'] = $('#id_customer').val();

        $('#budgets_customer_admin').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customer/ajax2",
                "type": "POST",
                "data":array
            }
        });        
    });

    //pedidos do vendedor
    $(document).ready(function (){
        var array = [];
        array['myrequests'] = true;

        $('#user_my_requests').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"user/ajax",
                "type": "POST",
                "data":array
            }
        });
    });

    //pedido de cliente
    $(document).ready(function (){
        var array = [];
        array['id_customer'] = $('#id_customer').val();
        array['id'] = $('#id').val();
        $('#requests_customer').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "lengthMenu": "_MENU_ registros por página",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(Filtrado de _MAX_ registros no total)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
            },
            "ajax": {
                "url": url+"customer/ajax2",
                "type": "POST",
                "data":array
            }
        });
    });

});
