CREATE DATABASE IF NOT EXISTS db_alumni;
USE db_alumni;


CREATE TABLE IF NOT EXISTS alumni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    program_studi VARCHAR(50) NOT NULL,
    tahun_lulus YEAR NOT NULL
);

INSERT INTO alumni (nama, nim, email, program_studi, tahun_lulus) VALUES
('Andi Saputra', 'I123456', 'andi_saputra@kaist.ac.id', 'Informatika', 2022),
('Budi Santoso', 'D234567', 'budi_santoso@kaist.ac.id', 'Teknik Industri', 2023),
('Citra Dewi', 'S345678', 'citra_dewi@kaist.ac.id', 'Teknik Sipil', 2025),
('Deni Kusuma', 'G456789', 'deni_kusuma@kaist.ac.id', 'Teknik Geologi', 2021),
('Eka Lestari', 'E567890', 'eka_lestari@kaist.ac.id', 'Teknik Elektro', 2024),
('Fandi Ahmad', 'I112233', 'fandi_ahmad@kaist.ac.id', 'Informatika', 2023),
('Galih Prabowo', 'D223344', 'galih_prabowo@kaist.ac.id', 'Teknik Industri', 2022),
('Hana Permata', 'S334455', 'hana_permata@kaist.ac.id', 'Teknik Sipil', 2024),
('Indra Wijaya', 'G445566', 'indra_wijaya@kaist.ac.id', 'Teknik Geologi', 2022),
('Joko Susilo', 'E556677', 'joko_susilo@kaist.ac.id', 'Teknik Elektro', 2021),
('Kartika Sari', 'I167890', 'kartika_sari@kaist.ac.id', 'Informatika', 2021),
('Lina Maharani', 'D278901', 'lina_maharani@kaist.ac.id', 'Teknik Industri', 2025),
('Maman Suryaman', 'S389012', 'maman_suryaman@kaist.ac.id', 'Teknik Sipil', 2023),
('Nina Hardiyanti', 'G490123', 'nina_hardiyanti@kaist.ac.id', 'Teknik Geologi', 2024),
('Oki Gunawan', 'E501234', 'oki_gunawan@kaist.ac.id', 'Teknik Elektro', 2022),
('Putri Rahayu', 'I612345', 'putri_rahayu@kaist.ac.id', 'Informatika', 2024),
('Qori Hidayat', 'D723456', 'qori_hidayat@kaist.ac.id', 'Teknik Industri', 2021),
('Rini Setiawati', 'S834567', 'rini_setiawati@kaist.ac.id', 'Teknik Sipil', 2022),
('Sandi Pratama', 'G945678', 'sandi_pratama@kaist.ac.id', 'Teknik Geologi', 2023),
('Tyas Anggraini', 'E056789', 'tyas_anggraini@kaist.ac.id', 'Teknik Elektro', 2025),
('Udin Sedunia', 'I167345', 'udin_sedunia@kaist.ac.id', 'Informatika', 2020),
('Vina Mulyana', 'D278456', 'vina_mulyana@kaist.ac.id', 'Teknik Industri', 2020),
('Wawan Kurniawan', 'S389567', 'wawan_kurniawan@kaist.ac.id', 'Teknik Sipil', 2020),
('Xaverius Budi', 'G490678', 'xaverius_budi@kaist.ac.id', 'Teknik Geologi', 2020),
('Yanti Setiawati', 'E501789', 'yanti_setiawati@kaist.ac.id', 'Teknik Elektro', 2020),
('Zaki Ahmad', 'I678901', 'zaki_ahmad@kaist.ac.id', 'Informatika', 2021),
('Agus Budiman', 'D789012', 'agus_budiman@kaist.ac.id', 'Teknik Industri', 2022),
('Bella Safitri', 'S890123', 'bella_safitri@kaist.ac.id', 'Teknik Sipil', 2023),
('Cahyo Nugroho', 'G901234', 'cahyo_nugroho@kaist.ac.id', 'Teknik Geologi', 2024),
('Dewi Lestari', 'E012345', 'dewi_lestari@kaist.ac.id', 'Teknik Elektro', 2025),
('Erwin Saputra', 'I123789', 'erwin_saputra@kaist.ac.id', 'Informatika', 2021),
('Fitri Handayani', 'D234890', 'fitri_handayani@kaist.ac.id', 'Teknik Industri', 2022),
('Gunawan Wibowo', 'S345901', 'gunawan_wibowo@kaist.ac.id', 'Teknik Sipil', 2023),
('Hendra Kusuma', 'G456012', 'hendra_kusuma@kaist.ac.id', 'Teknik Geologi', 2024),
('Irma Wati', 'E567123', 'irma_wati@kaist.ac.id', 'Teknik Elektro', 2025),
('Joni Hermawan', 'I678234', 'joni_hermawan@kaist.ac.id', 'Informatika', 2020),
('Kiky Saputri', 'D789345', 'kiky_saputri@kaist.ac.id', 'Teknik Industri', 2021),
('Lukman Hakim', 'S890456', 'lukman_hakim@kaist.ac.id', 'Teknik Sipil', 2022),
('Mira Cahyani', 'G901567', 'mira_cahyani@kaist.ac.id', 'Teknik Geologi', 2023),
('Nana Suryana', 'E012678', 'nana_suryana@kaist.ac.id', 'Teknik Elektro', 2024),
('Oki Firmansyah', 'I123890', 'oki_firmansyah@kaist.ac.id', 'Informatika', 2025),
('Putra Wijaya', 'D234901', 'putra_wijaya@kaist.ac.id', 'Teknik Industri', 2020),
('Qori Hamidah', 'S346012', 'qori_hamidah@kaist.ac.id', 'Teknik Sipil', 2021),
('Rudi Hartono', 'G457123', 'rudi_hartono@kaist.ac.id', 'Teknik Geologi', 2022),
('Sinta Dewi', 'E568234', 'sinta_dewi@kaist.ac.id', 'Teknik Elektro', 2023),
('Taufik Hidayat', 'I679345', 'taufik_hidayat@kaist.ac.id', 'Informatika', 2024),
('Umi Kalsum', 'D780456', 'umi_kalsum@kaist.ac.id', 'Teknik Industri', 2025),
('Veri Setiawan', 'S891567', 'veri_setiawan@kaist.ac.id', 'Teknik Sipil', 2020),
('Wulan Dari', 'G902678', 'wulan_dari@kaist.ac.id', 'Teknik Geologi', 2021),
('Xeno Putra', 'E013789', 'xeno_putra@kaist.ac.id', 'Teknik Elektro', 2022),
('Yunita Anggraeni', 'I124890', 'yunita_anggraeni@kaist.ac.id', 'Informatika', 2023),
('Zainal Abidin', 'D235901', 'zainal_abidin@kaist.ac.id', 'Teknik Industri', 2024),
('Anita Rahmawati', 'S346012', 'anita_rahmawati@kaist.ac.id', 'Teknik Sipil', 2025),
('Bimo Setiawan', 'G457123', 'bimo_setiawan@kaist.ac.id', 'Teknik Geologi', 2020),
('Cici Paramita', 'E568234', 'cici_paramita@kaist.ac.id', 'Teknik Elektro', 2021),
('Dodi Sudrajat', 'I679345', 'dodi_sudrajat@kaist.ac.id', 'Informatika', 2022),
('Elsa Nuraini', 'D780456', 'elsa_nuraini@kaist.ac.id', 'Teknik Industri', 2023),
('Fajar Ramadhan', 'S891567', 'fajar_ramadhan@kaist.ac.id', 'Teknik Sipil', 2024),
('Gita Gutawa', 'G902678', 'gita_gutawa@kaist.ac.id', 'Teknik Geologi', 2025),
('Hadi Purnomo', 'E013789', 'hadi_purnomo@kaist.ac.id', 'Teknik Elektro', 2020),
('Indah Pertiwi', 'I124890', 'indah_pertiwi@kaist.ac.id', 'Informatika', 2021),
('Joni Iskandar', 'D235901', 'joni_iskandar@kaist.ac.id', 'Teknik Industri', 2022),
('Kartini Mulia', 'S347012', 'kartini_mulia@kaist.ac.id', 'Teknik Sipil', 2023),
('Lukas Baskoro', 'G458123', 'lukas_baskoro@kaist.ac.id', 'Teknik Geologi', 2024),
('Maya Ayu', 'E569234', 'maya_ayu@kaist.ac.id', 'Teknik Elektro', 2025),
('Novan Eka', 'I670345', 'novan_eka@kaist.ac.id', 'Informatika', 2020),
('Oktavia Rahma', 'D781456', 'oktavia_rahma@kaist.ac.id', 'Teknik Industri', 2021),
('Pandu Winata', 'S892567', 'pandu_winata@kaist.ac.id', 'Teknik Sipil', 2022),
('Qomariah Zulfa', 'G903678', 'qomariah_zulfa@kaist.ac.id', 'Teknik Geologi', 2023),
('Rahadian Putra', 'E014789', 'rahadian_putra@kaist.ac.id', 'Teknik Elektro', 2024),
('Silvia Natasya', 'I125890', 'silvia_natasya@kaist.ac.id', 'Informatika', 2025),
('Tanto Wijaya', 'D236901', 'tanto_wijaya@kaist.ac.id', 'Teknik Industri', 2020),
('Utari Dian', 'S347012', 'utari_dian@kaist.ac.id', 'Teknik Sipil', 2021),
('Vicky Prasetyo', 'G458123', 'vicky_prasetyo@kaist.ac.id', 'Teknik Geologi', 2022),
('Winda Karlina', 'E569234', 'winda_karlina@kaist.ac.id', 'Teknik Elektro', 2023),
('Yudi Hartanto', 'I670345', 'yudi_hartanto@kaist.ac.id', 'Informatika', 2024),
('Zulfa Karimah', 'D781456', 'zulfa_karimah@kaist.ac.id', 'Teknik Industri', 2025),
('Amin Rais', 'S892567', 'amin_rais@kaist.ac.id', 'Teknik Sipil', 2020),
('Bayu Segara', 'G903678', 'bayu_segara@kaist.ac.id', 'Teknik Geologi', 2021),
('Citra Kirana', 'E014789', 'citra_kirana@kaist.ac.id', 'Teknik Elektro', 2022),
('Dimas Anggara', 'I125890', 'dimas_anggara@kaist.ac.id', 'Informatika', 2023),
('Erni Wijayanti', 'D236901', 'erni_wijayanti@kaist.ac.id', 'Teknik Industri', 2024),
('Fadli Zon', 'S348012', 'fadli_zon@kaist.ac.id', 'Teknik Sipil', 2025),
('Gani Ahmad', 'G459123', 'gani_ahmad@kaist.ac.id', 'Teknik Geologi', 2020),
('Hesti Purwandari', 'E560234', 'hesti_purwandari@kaist.ac.id', 'Teknik Elektro', 2021),
('Irwan Maulana', 'I671345', 'irwan_maulana@kaist.ac.id', 'Informatika', 2022),
('Jasmine Putri', 'D782456', 'jasmine_putri@kaist.ac.id', 'Teknik Industri', 2023),
('Krisna Murti', 'S893567', 'krisna_murti@kaist.ac.id', 'Teknik Sipil', 2024),
('Laila Majnun', 'G904678', 'laila_majnun@kaist.ac.id', 'Teknik Geologi', 2025),
('Mahmud Mahir', 'E015789', 'mahmud_mahir@kaist.ac.id', 'Teknik Elektro', 2020),
('Nadia Omara', 'I126890', 'nadia_omara@kaist.ac.id', 'Informatika', 2021),
('Oscar Darmawan', 'D237901', 'oscar_darmawan@kaist.ac.id', 'Teknik Industri', 2022),
('Putri Ramadhani', 'S348012', 'putri_ramadhani@kaist.ac.id', 'Teknik Sipil', 2023),
('Rama Aditya', 'G459123', 'rama_aditya@kaist.ac.id', 'Teknik Geologi', 2024),
('Shinta Dewi', 'E560234', 'shinta_dewi@kaist.ac.id', 'Teknik Elektro', 2025),
('Tio Pakusadewo', 'I671345', 'tio_pakusadewo@kaist.ac.id', 'Informatika', 2020),
('Ulya Sofiana', 'D782456', 'ulya_sofiana@kaist.ac.id', 'Teknik Industri', 2021),
('Vina Panduwinata', 'S893567', 'vina_panduwinata@kaist.ac.id', 'Teknik Sipil', 2022),
('William Tanuwijaya', 'G904678', 'william_tanuwijaya@kaist.ac.id', 'Teknik Geologi', 2023),
('Xenia Putri', 'E015789', 'xenia_putri@kaist.ac.id', 'Teknik Elektro', 2024);