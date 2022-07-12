create database if not exists loja_de_varejo;
use loja_de_varejo;
create table if not exists product(
product_code int,
product_name varchar(45) not null,
price varchar(10) not null,
quantity int,
primary key (product_code)

);
create table if not exists address(
address_code int,
public_place varchar(45) not null,
number_of_street varchar(10) not null,
complemente varchar(10) not null,
neighborhood varchar(20) not null,
city varchar(30) not null,
zip_code varchar(15) not null,
primary key(address_code)
);
create table if not exists provider(
cnpj int,
provider_name varchar(45) not null,
phone varchar(10),
address_code int,
primary key(cnpj),
foreign key (address_code) references address(address_code)
);
create table if not exists provider_product(
cnpj int,
product_code int,
primary key(cnpj, product_code),
foreign key(cnpj) references provider(cnpj),
foreign key (product_code) references product(product_code)
);
