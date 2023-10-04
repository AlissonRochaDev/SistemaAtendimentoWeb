-- Total de 6 tabelas.
select * from tb_usuario;

select * from tb_funcionario;

select * from tb_cliente;

select * from tb_servico;

select * from tb_agenda;

select * from tb_atendimento;

insert into tb_usuario (nome_usuario, nome_salao, tel_usuario, email_usuario, endereco_salao, senha_usuario)
values ('Alisson Rocha', 'Salão Barbeautiful', 43988002211, 'alisson.r@gmail.com', 'Rua Comercial Nº492', 'ali321');

update tb_usuario
	set email_usuario = 'alisson.f.rocha@hotmail.com',
		senha_usuario = '@l!$$0N321'
	where id_usuario = 1;