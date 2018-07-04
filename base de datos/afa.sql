-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2016 a las 21:41:35
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `afa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asociacion`
--

INSERT INTO `asociacion` (`id`, `id_login`, `rut`, `nombre`, `region`, `comuna`, `ciudad`) VALUES
(0, 1, '185219607', 'asociacion prueba', 'rancagua', 'rancagua', 'rancagua');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cant_series` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rut_presidente` varchar(10) NOT NULL,
  `nombre_presidente` varchar(50) NOT NULL,
  `direccion_presidente` varchar(90) NOT NULL,
  `correo_presidente` varchar(90) NOT NULL,
  `fono_presidente` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`id`, `idlogin`, `nombre`, `cant_series`, `direccion`, `rut_presidente`, `nombre_presidente`, `direccion_presidente`, `correo_presidente`, `fono_presidente`, `estado`) VALUES
(1, 2, 'ClubPruebad', 7, 'Mi casa, Rancagua, chile', '12010871_9', 'Claudio prueba ', 'Mi casa, Rancagua, chile', 'prueba@club.cl', 56082230, 1),
(2, 3, 'codegua', 2, 'asda', '12321', 'wqe', 'asda', 'asd@sad.cl', 0, 1),
(3, 4, 'Rancagua', 2, 'adasd', '12312', 'wdasd', 'adasd', 'ds@s.cl', 1213, 0),
(4, 8, 'ayayai', 2, 'por ahy', '19191991', 'sadas', 'sdasd', 'sad@sd.cl', 213123, 1),
(5, 9, 'asdhas', 1, 'eqwe', '199999', 'qwqwe', 'qedasd@lsd.cl', 'qedasd@lsd.cl', 12312, 1),
(6, 10, 'uyuiaAAS', 4, 'eqwe', '19191991', 'qwqwe', 'qedasd@lsd.cl', 'ASD@lsd.cl', 213123, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE `comite` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `fono` int(11) NOT NULL,
  `representante_rut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_traspaso`
--

CREATE TABLE `estado_traspaso` (
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nrofecha` int(11) NOT NULL,
  `id_club_local` int(11) NOT NULL,
  `id_club_visita` int(11) NOT NULL,
  `rut_turno` varchar(10) NOT NULL,
  `id_maquina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`id`, `fecha`, `nrofecha`, `id_club_local`, `id_club_visita`, `rut_turno`, `id_maquina`) VALUES
(33, '0000-00-00', 0, 2, 3, 'Seleccione', 0),
(34, '0000-00-00', 0, 5, 3, '185219607', 0),
(35, '0000-00-00', 0, 5, 6, 'Seleccione', 0),
(38, '0000-00-00', 3, 1, 2, 'Seleccione', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE `informe` (
  `id` int(11) NOT NULL,
  `rut_turno` varchar(10) NOT NULL,
  `fecha` int(11) NOT NULL,
  `informe` varchar(5000) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informe`
--

INSERT INTO `informe` (`id`, `rut_turno`, `fecha`, `informe`, `estado`) VALUES
(5, '185219607', 10, 'tranquilo', 1),
(6, '12010871', 9, 'asdasd', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `fono` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `club` varchar(100) NOT NULL,
  `huella` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`rut`, `nombre`, `direccion`, `fono`, `fecha_nacimiento`, `club`, `huella`) VALUES
('', 'wdad', 'ewqe', 123, '2016-10-03', '', ''),
('1111111-1', 'hsajshasj', 'dsadasd', 99999, '2016-10-19', '1', 0x00f88101c82ae3735cc0413709ab7130ae1455922184ee02a9f8f31fd541081efd70f17d017bc2a013e32e1ea4daa8af55078d863e17341a1b6458af8c084c5c8d7ccf2083b3c4676d8189946d2506d18ab434d5a000a6ae1c5167b54c70c6d72c2ea53a3460f5cf8c90f12e458590a836867b478955513adc372407972f55e38326173811cbb479c07dbbb342c61150dd0132308215afa36ad8a5679134f5281077cfa5f38eedaff69f186fd7f45e8447b34ed7525fcc8e9a592f330d46ba9b68f3067379b53a8fa644cbc9afb40674bc6b1e963442dbf47b8757ca8f1b45dc77e00ff6f1dbbde0259db9286952739eff0a968d1eb743ae32f472a5dd168500031318e8065cd01c68a84f038f08f34516472aee6859d3af1aaa788907050e480b3bf1e4f43cdc60276d6fcf429e437c9927b5a40d7e8e35bb867a8fb5c57454f8a382a4be7ab0b1d7cb16ac5b144374733396b9bda3fd52805f85a1c0efa2530248423bd23057c0733da687cc4b2a5c86da10ad6047a20e8bc6a0a7ffec201446672e13d96f00f88101c82ae3735cc0413709ab71f0af1455928e0efa50a7e464bc5e872d65b6f2a96bfcc016dd0c9cbad1a4462136a836102fc1cd4ba914ac75c8312178ab45159fa6ff2a0955f995ff2bed148322c2f7dcc955e2e76a2b1a194299e38db843d3561e2645458d4f2b1862d68fb96b41a0dad186b4e92bb9e3de5f94302d42aaec3989473506dea43d27c6066af248338755310de21c77d8dca754b64f61ace09be070085a90fe48a66a4b14cd69b502b26f4d915ac2ea80474e7af3f72d23d0e4b142247390081ac7234031e85e1271ed374ec704f549c644ca79392ae5a3699dcbea1559e27d206f2ec3eb2b363f3e131bdfd4c9a219a295bdafa57222f63a672f9452e5faa91ffe9ad8ba0fcc19e4bbb542937b0e2429b1123ac8a9dc570cfda1e1b4d8a4fecb88965a4c66c9d2e824cb78df056f40720438dc6711e8d81c4a691e8a32cbf500f318e2096ffc9eb9217724083430fdca2a7de723d9bffcab20f9a9f528f67705e66af017d9796e39f328b47c7d0c327bf9b9b333eebe42d4157a37e86f00f88001c82ae3735cc0413709ab71309b145592a708ce08fb601b016d7f17ccb59ab90e4134f7c446165bda26bc06b66fe4f859aa2eafe47aa0084a43ca0a63ca25567ac26172a14b9174ab76d87517d088f0fd78e0d310bac9ff3bcd888c1e9db7e6673bef93d3bff58ade63b48ad886e1eb381be71aeefc13a9220893642bbfdc2b1f385e862e151087a512633dcf62f7247fbf6c60d1a1ccd3fee8d7810d95a26d2697ddc35aa545c786ca76e80509a20cb861a72d55fc4c14142972533064ebc23b0871037510e25acd6b3320da90898cbc1a0a4f4f832c80868722e11b4703dfbb3e96f848aec5339ee2926e585ae6816695f23d0392b14caeb1b1cf9e5a059214ff5259d4d37490c3e860a88ff051539199169278d6f275c27c6f555bb9e7c2a7251873aa27c451de4f2cd3bbfad11e4ecd16f119a77df8bbe16cc9cb41cf3cb16708dc1d673c11b637f94dd88ad07b592205bdcc7513a8a2ca43db78993f5ceb6aff9bd79d4d3bf1318c108873f859e8df639ac358d643f9d2752fb047b2aad06f00e88001c82ae3735cc0413709ab7130a7145592cd7f9374fba6c9284cb7364bb4cde518ab32b7788c17a6d66cda5279205c00e8ecc104e33fad10029d86636dbb978891ad1667136825d4083975879a2523be6cee60c85dd003a31f22fb179dffa8c947a11c7cccf1e9f1ee9514a7b9b29dbdb986b4c76ed935774e670a902443ebc592d4e25d540fc308625123f252652dc1a06bf03ca2c82ae43b47ef6a955528a6e614fd86289a192e38f126d1512d458175816642fbe1142373788c41f7402b70fbe6303ecca0d3a3af384cc1c7ef9dcad05182f2215fc22255da496152259e9668bbb50f460f7a569e9f4522f891779d9fc61198cdf59c3c14dde2eb7246d558350d4229e47958d8f8c1a9f8d332620779ae7b959165c34d27a4dd9f70f4ef65c7e6efe54d02d987c98c2f0593c2320f6b236eecfede4316bbac6f26d32de5e188226624242a0725f3963248f3c925a3b633d2a48cf7d0335eb81a87e3d6c616ea9e25b8ea4df22079d985a7519316b69d29a972b5b1f404dbed7ee4437cebcb1a6f0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
('22222222-2', 'kkkkkaa', 'ssss', 444444, '2016-10-19', '1', 0x00f88101c82ae3735cc0413709ab7130be1455924d9817bd051f32881c550b8ff675e8c689b0ab910a867d557e60a1217d4162ef21a05ba9556b13dfce242f6a5753c17855d0963ee241578cecf629d37037d6bf25609fa9817a2c6f5fab5141f67d68e086248984b3b04d6ddffd62925467a4b57fc1cde51f2e3820c38ceae3b198e903a246c6c67c98663971f3e4c709e47fe97bf8b1b39e0ecd30b7b54d37700b1b06c3e6d215f769167c6865992ee104d24f4af9457dd71440e624228d4c76dd278485113f9186496307b893ed4a4b985d9cef2c787ab4a4e613ff26d55726497aacec6e0a5f109714e20c2ca975925c014fda9b9eeaf74105c66c84f1b24bce9bdda7414ae70f0066e97f6c9de48382795a1d7e50f6c55eb57ff1265265421273fcfd3eaf6709963946eadfa199a79af66c4e196fc2519e04cae8a2a3438b121fab1a32f763121c4f7201521945d519eafe0de3db058c6f303dacd40352010fcbdc8b89baf64147986007eb338af36b5119d4fc77a1dc8841bca19ab2bdc321adf8d26f00f88101c82ae3735cc0413709ab71b0a5145592c27a2d16715df65e9b088154882f3808c026f51b676417aa903fc75bb0f7e0472495f1c39be1077f025725e7d9ae14f0138177644785ce0c28dab47e048017ed50b6d49bfff05a884c21bf2c769991f644115dd885c33237ef83e485a31102f19629dbbbc3c9fcaaeb0976da6779008e6f78a9d41e6c559f2aea99bd642f07b5b0042f109009d0e5daf9d23df9d7a495058ee8cfea594ec9aa71fea92fe98ee7745ded89cbf1314138776ecdc46fdaa852d707d067e72320faee8f1a5b941f8753b0ee259dcce69bb7cfa0800d985e19037969792030bcbeb8cc224e2689cf57cc7beebef14de124df61ff9bef09c99937865fd7210696accbeb2052c963cfe459f04617324afa3369d6a214f41b7262384f90f79597862a13bf3fb26e627e755277e85ad3b99004361e6f7d76cba3fb13b4fc51a9f15b5740fb8245337dedbd61043164460f2903686f7014cd7d56f19f902e41e3607a936aa771298225fdf034156a785594ff2f1ac0d2a9c07b5cb9cd6f00f87e01c82ae3735cc0413709ab71b0bc14559201c77f29809334a8db222f2bb93fc2e9046d1697b84cf61b6903bf081c8e260aa3fb299c6061a29a984a2013859c8f4e3923a94d4905ab0bbba7ff698b7f18fd588929e519ad4421d61f57d6fefc3402cfd72d3c65fc4cf901643c5227a3b8598ebcab47774ea4fd29d6228290c21dadc5fb8a6fadd79ea78b6a8e3e60ebd70e9c6b2a189000c96da2b186c14461d316377ac11c81cc2817059a0a6cb966fda186eccbbe7e56fb582abfc445c161826cc6885249976384fff37fd6cda2590a64f7c36d71770bc0889d2e200280aaa76a1ec002d7e22fb1fab0622e65e6cecd48c8726f26b09115f0019920bdff07d45bed05ad8ce363cafba88fe3ba276b7b7af20b462b6ae7bbaee69abde6bc20c169fb1fd64d309808f9e3d638a35f37b6d46b4cd3d916b277d0fd7d98ffff393007ba0847a8a2c07499da38a9155de1c100b74265575f1006248ec3fd075e4b69b379695bcfb104453a770931d8a1eb4ed9924a5625f4b5b2af8a5dfdb052a26f00e88101c82ae3735cc0413709ab71f097145592bdf950319e5d5387d3850df3f6cd48b8c17d9d32633d3a46d02ca4892bb8ad9dbcacbdbcbd85e9b77e66c0a8400f9bb34852e4620fa436bf5638e7a240c524d0d13eba49fcdac5a59fddaa4b9d3b87fc91ba711f7b0ab33a08bbe379838859ff114fbed2c7235f30661065dd29416770c8ecb77fb7fa661d386760a3355b3bfd85135f08b66119ca05fa8d10ad62f8f833c5e3e89bf2762e88ee01065658bfe5c28f38fb0f7228c6936cd05c0509efe09ed425d8e28b1d01f3ce3c8f3d8def4342a57570e71b5b2b6ed6c677081185d086401135eaefc9076dc61b914127c2ba324edea64617fdbd2d1df24daca25571b5a71b11493fe6463888325245b7e184defded7f78465d5e900ea8198b078018d5e9a9641ea75a21937eb627e748935062c5bcf4f6666e0c70c20f9cbe8d15f2d272b71ae3855edca1bd51d9198e913f23406412c4ef5985a723cbc7b17933d048aa22a74000ebc4bec7b6f71c29d52915ce7302c4fdeac392c8c6a113913c8d1f6f000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
('3333333-3', 'fsdffdfd', 'ssss', 44444, '2016-10-21', '1', 0x00f86401c82ae3735cc0413709ab71f0ae1455925b752c3919211ba8b990dfa6a800d6737f132f27a321a537c7dd2d182f0b5a39d367e155a1c00e33067b136a9e5a0dece506b77164c352ce62fa9e87004c134f88aa97d6270eb2b8dca7e172376d0eea25d6746aef884fa6c364da72f0c7ab5e6482f7fa9d264b2dfcc18b7caabba4580ad93ee85304fb0eec252f828cce85af18511d9077d963626342488347a5b6a11bd8ed23bab5ec19b72a10eaf1891e24b45c35e8cf0d58b2b5b749d7d44f38d812467369343e41a2e9cb7f1ef980057d1e6e272ade912d180985a8337af82e9fb1501a189b2638a3904c27fbf7aaa492339a2dfe8c3636a4c5079111d00187642de230ed22d021944bc09455b8de6ed835dbad5a98f302904397de3e64ece09c84af4da0c928a55adb5ec283021069da69eb2d34fcd9f85e91875e72f02b31b85befc8d5493a4c65ad3774a58be7ccf21e04bf950750c55dd73a17415ad182344e1c86026f00f87e01c82ae3735cc0413709ab7130a31455926d355cd8feb068402006ad292be75b32c35847ca4f053d69485fd7038a945fa7de968312a5e38be2d3d980980ad18eef5c67f58886812e41c75bd836674d24d3555d5f38a1117370ff0aa07afe1070771584b7897ed5f2500bdf255353ad3258c25d71fa641a89762a7b2c73da609463f12bf374cdfb1b38d98e434a1e100f5a79df9baea7636c1fb87e3fa3d20be1372e36d9f65ed22359ffc91237ba5689574316a6c3b53d78e3c73a842c3650f21371e8da5d3b0a6ec9c024760f83e60f4bb91ad4253d256226a467e1fcb015adf0f319ede64f2f5c370aa75cbd1db5965119f5a25e4dbddec6048dbef089e605b2c2db65918a7bf25623c33de189b9be977279524ee7168de612ea5b3a685eecd461149548b27b6039ffd7a1c4b1e83c5ab69d0aa15f20e8da14cfa16c97d113a38d338451c4e4afbf6eb4b27e878cdd6253945a34f41e6cf430033307dd07965e11aced678177c3607e1d7ca5cacca44d24be87cec6d382241640926c0e996f00f87e01c82ae3735cc0413709ab71f0931455928874145ba8401a44b4f89afc5721a7a1ecb9f0e4123ddbf8d6e651c831b08e259a2a2b8644349dd126fdfeff66619a441cf60347e4b69ca5e0d59a7054eb91e386e4e5e335f74fe022ef5c6e24451a4616be142750207f1f968972bebdb4ab69e846058f1daadfa5d87ba671c02d348863ba5dffe0a17b7f18ad5402b558820e1287dc6c6bead3192226d0663fee3292b8aa38f3d0881e66a968fc3230c4942102f8f78be34a66fd4c3122760ce12742328af30a50bc57bd7c04af5341dd312b17d4358c9382c7bd71fb12cfa90c78bad4a1e0132dcc24184e7b1f723c8b43cd777e0b5653f03975618f6be01935a7388a31987df100c384ace884897e4c02098fb74e6d870b0813fbed511225487804954101df83f9b5cd59506d081ec5f4240dc25655b6ed30fcfabd1df51f8f6d71fac75f733f83f77e65e6f7827ec7b02489da245c7d9e4d7f37500026ed1ea5c936dd58289bc4f1cc497fbeacb8a4b0ba808411d9f435da97d7ad7e5b42576f00e88101c82ae3735cc0413709ab7130bb14559223b6c33cc8bfa9b06180bfde888946197335d16adc205539b7def001ccf904e45dcb644001d325228113e9b2505a96455a1c4220a3694a49624faecc79c8ae43c87398a2af7c990df1de015e0689c73868276ea0dedc29eb959288240bd16b578d87ba5fcf03831b34fcf13f64aae1b41c8c56245d90c62423f444db59ad0e2d57fb4c709768784c5e548daef6ee4440b7aef4f6d015cfe4f54b4b9cfe6c425a3bdbe673f384d2e77a3d729f2c5a49185f29924626198e2fe9368472d8aaea50a8638bba3274441d21aba0d2f2888f668d19ea6ec3324c4b8dfe39a9742e54bc3f3abc37c74120e24bc852e411c7f804e009e5fa65d7b14493ee3f540935172290847d7c9d2affc7e5524fa57cd8814a7c674ee22762c570d09371d80497282a3d7ac72d5d88092a809ae7296ccb52ad2fa3f3e3f81b7a5004abbe0db17346ba9ed8235bac54add72dc4ec2206c199295d0c5e4084248a39e6d0486d7b53ebe1b10809b5b63e059b3141c6035ea82791116f0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recup_contraseña`
--

CREATE TABLE `recup_contraseña` (
  `id_recup` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `pregunta_1` varchar(100) NOT NULL,
  `pregunta_2` varchar(100) NOT NULL,
  `pregunta_3` varchar(100) NOT NULL,
  `respuesta_1` varchar(100) NOT NULL,
  `respuesta_2` varchar(100) NOT NULL,
  `respuesta_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_login`
--

CREATE TABLE `reg_login` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `tipo_usr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reg_login`
--

INSERT INTO `reg_login` (`id`, `correo`, `contrasena`, `tipo_usr`) VALUES
(1, 'asociacion@prueba.cl', '1234', 1),
(2, 'prueba@club.cl', '1234', 2),
(3, 'asd@sad.cl', '1234', 2),
(4, 'comite@prueba.cl', '1234', 3),
(5, 'Pazayalazuniga@gmail.com', 'xxed', 2),
(6, 'eqwe@li.cl', '1234', 2),
(7, 'sad@sd.cl', 'sad@sd.cl', 2),
(8, 'sad@sd.cl', 'sad@sd.cl', 2),
(9, 'qedasd@lsd.cl', 'xxed', 2),
(10, 'ASD@lsd.cl', 'ASD@lsd.cl', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `id_fecha` int(11) NOT NULL,
  `res_club_local` int(11) NOT NULL,
  `res_club_visita` int(11) NOT NULL,
  `rut_turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sancion`
--

CREATE TABLE `sancion` (
  `id` int(11) NOT NULL,
  `id_jugador` varchar(10) NOT NULL,
  `sancion` varchar(100) NOT NULL,
  `cantidad_de_fechas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sancion`
--

INSERT INTO `sancion` (`id`, `id_jugador`, `sancion`, `cantidad_de_fechas`) VALUES
(3, '185219607', 'dcasasdasd', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usr`
--

CREATE TABLE `tipo_usr` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usr`
--

INSERT INTO `tipo_usr` (`id`, `descripcion`) VALUES
(1, 'Asociacion'),
(2, 'club'),
(3, 'comite de disiplina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traspaso`
--

CREATE TABLE `traspaso` (
  `id` int(11) NOT NULL,
  `id_club_solicitante` int(11) NOT NULL,
  `activo/inactivo` tinyint(1) NOT NULL,
  `ID_jugador` int(10) NOT NULL,
  `id_club_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `traspaso`
--

INSERT INTO `traspaso` (`id`, `id_club_solicitante`, `activo/inactivo`, `ID_jugador`, `id_club_destino`) VALUES
(1, 1, 0, 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fono` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`rut`, `nombre`, `apellidos`, `direccion`, `fono`, `correo`, `estado`) VALUES
('12010871', 'sda', 'sdaa', 'sad', 0, '1231wqe@asd.cl', 0),
('1234532', 'clal', 'wqe', 'qwe', 123, 'qwe@d.v', 0),
('18446783', 'sadasd', 'dasas', 'sad', 0, 'sad@ds.cl', 0),
('18521960', 'claudio', 'riq', 'wqe', 0, 'wdas@d.c', 0),
('185219607', 'Claudio ', 'Riquelme Moreno', 'mi casa', 56082230, 'criquelmemoreno@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comite`
--
ALTER TABLE `comite`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informe`
--
ALTER TABLE `informe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recup_contraseña`
--
ALTER TABLE `recup_contraseña`
  ADD PRIMARY KEY (`id_recup`);

--
-- Indices de la tabla `reg_login`
--
ALTER TABLE `reg_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sancion`
--
ALTER TABLE `sancion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usr`
--
ALTER TABLE `tipo_usr`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `traspaso`
--
ALTER TABLE `traspaso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `informe`
--
ALTER TABLE `informe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `recup_contraseña`
--
ALTER TABLE `recup_contraseña`
  MODIFY `id_recup` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sancion`
--
ALTER TABLE `sancion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_usr`
--
ALTER TABLE `tipo_usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `traspaso`
--
ALTER TABLE `traspaso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
