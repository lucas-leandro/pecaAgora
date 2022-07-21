CREATE DATABASE pecaagora
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.utf8'
    LC_CTYPE = 'Portuguese_Brazil.utf8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

    -- Table: public.cargo



    
-- DROP TABLE IF EXISTS public.cargo;

CREATE TABLE IF NOT EXISTS public.cargo
(
    id integer NOT NULL DEFAULT nextval('cargo_id_seq'::regclass),
    nome text COLLATE pg_catalog."default",
    CONSTRAINT cargo_pkey PRIMARY KEY (id)
    )

    TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.cargo
    OWNER to postgres;





-- Table: public.funcionarios

-- DROP TABLE IF EXISTS public.funcionarios;

CREATE TABLE IF NOT EXISTS public.funcionarios
(
    nome character varying(45) COLLATE pg_catalog."default",
    cpf character varying(15) COLLATE pg_catalog."default",
    logradouro character varying(45) COLLATE pg_catalog."default",
    cep character varying(10) COLLATE pg_catalog."default",
    cidade character varying(45) COLLATE pg_catalog."default",
    estado character varying(45) COLLATE pg_catalog."default",
    numero character varying(10) COLLATE pg_catalog."default",
    complemento character varying(45) COLLATE pg_catalog."default",
    cargo_id integer NOT NULL,
    id integer NOT NULL DEFAULT nextval('funcionarios_id_seq'::regclass),
    CONSTRAINT funcionarios_pkey PRIMARY KEY (id),
    CONSTRAINT fk_cargo FOREIGN KEY (cargo_id)
    REFERENCES public.cargo (id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID
    )

    TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.funcionarios
    OWNER to postgres;