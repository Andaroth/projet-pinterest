-- Adminer 4.3.1 PostgreSQL dump

DROP TABLE IF EXISTS "categories";
CREATE SEQUENCE categories_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;

CREATE TABLE "public"."categories" (
    "id" integer DEFAULT nextval('categories_id_seq') NOT NULL,
    "name" character(256) NOT NULL,
    "description" character(256) NOT NULL
) WITH (oids = false);


DROP TABLE IF EXISTS "img";
CREATE SEQUENCE img_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;

CREATE TABLE "public"."img" (
    "id" integer DEFAULT nextval('img_id_seq') NOT NULL,
    "url" character(256) NOT NULL,
    "title" character(256) NOT NULL,
    "date" timestamp DEFAULT now() NOT NULL,
    "description" character(400) NOT NULL
) WITH (oids = false);


DROP TABLE IF EXISTS "img_cat";
CREATE TABLE "public"."img_cat" (
    "id_images" integer NOT NULL,
    "id_categories" integer NOT NULL
) WITH (oids = false);


DROP TABLE IF EXISTS "users";
CREATE SEQUENCE users_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;

CREATE TABLE "public"."users" (
    "id" integer DEFAULT nextval('users_id_seq') NOT NULL,
    "name" character(256) NOT NULL,
    "mail" character(256) NOT NULL,
    "pass" character(256) NOT NULL,
    "date" timestamp DEFAULT now() NOT NULL,
    "admin" smallint DEFAULT 0 NOT NULL
) WITH (oids = false);


-- 2017-11-28 08:32:00.257153+00
