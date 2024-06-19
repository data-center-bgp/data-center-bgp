CREATE TABLE IF NOT EXISTS "migrations" (
    "id" SERIAL PRIMARY KEY,
    "migration" varchar NOT NULL,
    "batch" integer NOT NULL
);
INSERT INTO migrations VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO migrations VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO migrations VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO migrations VALUES (7, '2024_06_11_012638_create_cycle_time_c_o_a_s_table', 2);
INSERT INTO migrations VALUES (8, '2024_06_11_053838_create_delay_notes_c_o_a_s_table', 2);

CREATE TABLE IF NOT EXISTS "users" (
    "id" SERIAL PRIMARY KEY,
    "name" varchar NOT NULL,
    "email" varchar NOT NULL,
    "email_verified_at" timestamp,
    "password" varchar NOT NULL,
    "remember_token" varchar,
    "created_at" timestamp,
    "updated_at" timestamp
);
INSERT INTO users VALUES (
    1, 'CGA BPG', 'cga.barokahperkasagroup@gmail.com', NULL,
    '$2y$12$sNJd4sXBgA85nqrPqQXmeuxxKxzEuOCz7vKGRvNunLHV8BHbiTubG',
    'Fhrnhr75428WuqVaHPLPyYxzCG1wzVD8GVgB8z3xlCxsbOQQ1HMDaYoAwWHj',
    '2024-06-10 07:29:00', '2024-06-10 07:29:00'
);

CREATE TABLE IF NOT EXISTS "password_reset_tokens" (
    "email" varchar NOT NULL,
    "token" varchar NOT NULL,
    "created_at" timestamp,
    PRIMARY KEY ("email")
);

CREATE TABLE IF NOT EXISTS "sessions" (
    "id" varchar NOT NULL,
    "user_id" integer,
    "ip_address" varchar,
    "user_agent" text,
    "payload" text NOT NULL,
    "last_activity" integer NOT NULL,
    PRIMARY KEY ("id")
);
INSERT INTO sessions VALUES (
    'Tx3z5W9gAgafbfLKUAcrFjAr6XYFLxf1dlsKjBOW', 1, '127.0.0.1',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
    'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ3NmY1RjZzlybXpnbERyTzliUlNLQ0EyWWFPWE05NVhIdFMwNlVZTSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHNOSmQ0c1hCZ0E4NW5xclBxUVhtZXV4eEt4ekV1T0N6N3ZLR1J2TnVuTEhWOEJIYmlUdWJHIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cDovL2RhdGEtY2VudGVyLWJwZy50ZXN0L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718411063
);
INSERT INTO sessions VALUES (
    '5uvPnleTDYYPN2BuNFs1BMRmNNbQU9I2NOBjGcZI', 1, '127.0.0.1',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
    'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSmUwOVFqOEl1SmxSMlF5UENVaEM1VkppZTRmRGpubWZlU2w0QXA2WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9kYXRhLWNlbnRlci1icGcudGVzdC9hZG1pbi9jeWNsZS10aW1lLWMtby1hcy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkc05KZDRzWEJnQTg1bnFyUHFRWG1ldXh4S3h6RXVPQ3o3dktHUnZOdW5MSFY4QkhiaVR1YkciO30=', 1718411127
);
INSERT INTO sessions VALUES (
    '7OqeE4ZbCt6s5dtG0bi1pI4xhJCwixbB5o3ug3KM', 1, '127.0.0.1',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
    'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNkdaRUllQXRXRjhpN244d2ZhWmpZWXZMRlZOVHFxMHhUUjAxVHliVyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHNOSmQ0c1hCZ0E4NW5xclBxUVhtZXV4eEt4ekV1T0N6N3ZLR1J2TnVuTEhWOEJIYmlUdWJHIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MToiaHR0cDovL2RhdGEtY2VudGVyLWJwZy50ZXN0L2FkbWluL2N5Y2xlLXRpbWUtYy1vLWFzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718610116
);

CREATE TABLE IF NOT EXISTS "cache" (
    "key" varchar NOT NULL,
    "value" text NOT NULL,
    "expiration" integer NOT NULL,
    PRIMARY KEY ("key")
);
INSERT INTO cache VALUES ('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1718154079;', 1718154079);
INSERT INTO cache VALUES ('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1718154079);

CREATE TABLE IF NOT EXISTS "cache_locks" (
    "key" varchar NOT NULL,
    "owner" varchar NOT NULL,
    "expiration" integer NOT NULL,
    PRIMARY KEY ("key")
);

CREATE TABLE IF NOT EXISTS "jobs" (
    "id" SERIAL PRIMARY KEY,
    "queue" varchar NOT NULL,
    "payload" text NOT NULL,
    "attempts" integer NOT NULL,
    "reserved_at" integer,
    "available_at" integer NOT NULL,
    "created_at" integer NOT NULL
);

CREATE TABLE IF NOT EXISTS "job_batches" (
    "id" varchar NOT NULL,
    "name" varchar NOT NULL,
    "total_jobs" integer NOT NULL,
    "pending_jobs" integer NOT NULL,
    "failed_jobs" integer NOT NULL,
    "failed_job_ids" text NOT NULL,
    "options" text,
    "cancelled_at" integer,
    "created_at" integer NOT NULL,
    "finished_at" integer,
    PRIMARY KEY ("id")
);

CREATE TABLE IF NOT EXISTS "failed_jobs" (
    "id" SERIAL PRIMARY KEY,
    "uuid" varchar NOT NULL,
    "connection" text NOT NULL,
    "queue" text NOT NULL,
    "payload" text NOT NULL,
    "exception" text NOT NULL,
    "failed_at" timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS "cycle_time_c_o_a_s" (
    "id" SERIAL PRIMARY KEY,
    "created_at" timestamp,
    "updated_at" timestamp,
    "user_id" integer NOT NULL,
    "waktu" timestamp NOT NULL,
    "trip" varchar NOT NULL,
    "fleet" varchar NOT NULL,
    "tugboat_spob" varchar NOT NULL,
    "ob_spob" varchar NOT NULL,
    "rute" varchar NOT NULL,
    "estimasi_fuel" integer NOT NULL,
    "actual_fuel" integer NOT NULL,
    "mulai_dari_jetty_loading" timestamp,
    "order_tugboat_masuk_jetty_loading" timestamp,
    "mulai_naik_jangkar_jetty_loading" timestamp,
    "selesai_naik_jangkar_jetty_loading" timestamp,
    "proses_connect_jetty_loading" timestamp,
    "berlabuh_jetty_loading" timestamp,
    "loading_master_onboard_jetty_loading" timestamp,
    "mulai_loading_jetty_loading" timestamp,
    "selesai_loading_jetty_loading" timestamp,
    "mulai_sounding_jetty_loading" timestamp,
    "selesai_sounding_jetty_loading" timestamp,
    "order_tugboat_keluar_jetty_loading" timestamp,
    "proses_keluar_jetty_loading" timestamp,
    "cast_off_jetty_loading" timestamp,
    "full_away_sts" timestamp,
    "tiba_di_sts" timestamp,
    "order_tugboat_masuk_sts" timestamp,
    "proses_masuk_sts" timestamp,
    "berlabuh_sts" timestamp,
    "loading_master_onboard_sts" timestamp,
    "mulai_loading_sts" timestamp,
    "selesai_loading_sts" timestamp,
    "mulai_sounding_sts" timestamp,
    "selesai_sounding_sts" timestamp,
    "order_tugboat_keluar_sts" timestamp,
    "proses_keluar_sts" timestamp,
    "cast_off_sts" timestamp,
    "full_away_jetty_discharge" timestamp,
    "tiba_di_jetty_discharge" timestamp,
    "order_tugboat_masuk_jetty_discharge" timestamp,
    "mulai_naik_jangkar_jetty_discharge" timestamp,
    "selesai_naik_jangkar_jetty_discharge" timestamp,
    "proses_masuk_jetty_discharge" timestamp,
    "berlabuh_jetty_discharge" timestamp,
    "loading_master_onboard_jetty_discharge" timestamp,
    "mulai_discharge_jetty_discharge" timestamp,
    "selesai_discharge_jetty_discharge" timestamp,
    "document_cargo_onboard_jetty_discharge" timestamp,
    "order_tugboat_keluar_jetty_discharge" timestamp,
    "proses_keluar_jetty_discharge" timestamp,
    "cast_off_jetty_discharge" timestamp,
    "tiba_di_pulau_atas" timestamp,
    "full_away_setelah_discharge" timestamp,
    "selesai_satu_cycle" timestamp,
    FOREIGN KEY("user_id") REFERENCES "users"("id") ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS "delay_notes_c_o_a_s" (
    "id" SERIAL PRIMARY KEY,
    "created_at" timestamp,
    "updated_at" timestamp
);

CREATE UNIQUE INDEX "users_email_unique" ON "users" ("email");
CREATE INDEX "sessions_user_id_index" ON "sessions" ("user_id");
CREATE INDEX "sessions_last_activity_index" ON "sessions" ("last_activity");
CREATE INDEX "jobs_queue_index" ON "jobs" ("queue");
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" ON "failed_jobs" ("uuid");
