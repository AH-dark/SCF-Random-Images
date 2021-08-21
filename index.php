<?php

function main_handler($event, $context) {
	$images = [
        "https://tva1.sinaimg.cn/large/0076PFmely1gq3y41mwh8j31hc0u079u.jpg",
        "https://tvax1.sinaimg.cn/large/0076PFmely1gq3y41sgovj31hc0u0n35.jpg",
        "https://tva2.sinaimg.cn/large/0076PFmely1gq3y41xpigj31kw14bdpy.jpg",
        "https://tvax1.sinaimg.cn/large/0076PFmely1gq3y43gy47j31qi1dz7wk.jpg",
        "https://tvax4.sinaimg.cn/large/0076PFmely1gq3y441ph3j31wu104qnv.jpg",
        "https://tvax3.sinaimg.cn/large/0076PFmely1gq3y45xb44j33341xg7wk.jpg",
        "https://tvax2.sinaimg.cn/large/0076PFmely1gq3y4bgmmtj32op1jku15.jpg",
        "https://tvax4.sinaimg.cn/large/0076PFmely1gq3y4ecdawj328k15ub2d.jpg",
        "https://tva3.sinaimg.cn/large/0076PFmely1gq403oriw4j30ym0mznpd.jpg",
        "https://tva4.sinaimg.cn/large/0076PFmely1gq403pw00zj31hc0u07wi.jpg",
        "https://tva1.sinaimg.cn/large/0076PFmely1gq403qmbxcj31i90w5npd.jpg",
        "https://tva1.sinaimg.cn/large/0076PFmely1gq403t9ufrj33791ww1l1.jpg",
        "https://tva3.sinaimg.cn/large/0076PFmely1gq403ty0bvj313i0m8e2n.jpg",
        "https://tva2.sinaimg.cn/large/0076PFmely1gq403u3qe4j30rs0gek1q.jpg",
        "https://tva4.sinaimg.cn/large/0076PFmely1gq403uvw3xj31hc0u07wi.jpg",
        "https://tvax1.sinaimg.cn/large/0076PFmely1gq403va1d0j32pf1ww4jn.jpg",
        "https://tva2.sinaimg.cn/large/0076PFmely1gq403vz569j32yo1o0hdt.jpg",
        "https://tva1.sinaimg.cn/large/0076PFmely1gq403yqr8kj32yo1o0u11.jpg",
        "https://tvax3.sinaimg.cn/large/0076PFmely1gq4043k1esj32yo1o0e89.jpg",
        "https://tvax3.sinaimg.cn/large/0076PFmely1gq4eb7ya8dj31kw0w0npd.jpg",
        "https://tva2.sinaimg.cn/large/0076PFmely1gq4eb8m9ajj31hc0u0qux.jpg",
        "https://tvax2.sinaimg.cn/large/0076PFmely1gq4eb96f2lj31hc0u0npd.jpg",
        "https://tva1.sinaimg.cn/large/0076PFmely1gq7kx7wieij31hc0u0wui.jpg",
        "https://tvax2.sinaimg.cn/large/0076PFmely1gq7kx84m88j31hc0u0b29.jpg",
        "https://tva4.sinaimg.cn/large/0076PFmely1gq7kxae4k6j31xg1d7e84.jpg",
        "https://tvax3.sinaimg.cn/large/0076PFmely1gq7kxaw4gvj32yo1o0dvq.jpg",
        "https://tvax3.sinaimg.cn/large/0076PFmely1gq7kxbbsdfj32yo1o0tpw.jpg",
        "https://tvax4.sinaimg.cn/large/0076PFmely1gq7kxbo534j32yo1o04id.jpg",
        "https://tva4.sinaimg.cn/large/0076PFmely1gq7kxcvla1j323f1pbkjm.jpg",
        "https://tvax1.sinaimg.cn/large/0076PFmely1gq7kxfbc2uj32yo1o04qt.jpg",
        "https://tvax2.sinaimg.cn/large/0076PFmely1gq7m12sufnj32yo1o0u0x.jpg",
        "https://tva2.sinaimg.cn/large/0076PFmely1gsc40zufx8j31tq1d0b2a.jpg",
        "https://tvax4.sinaimg.cn/large/008kKrIXgy1gsc5kf8njuj31660rs4qq.jpg",
        "https://tvax4.sinaimg.cn/large/008kKrIXgy1gsc5kfw6hpj313w0rs4qq.jpg",
        "https://tva4.sinaimg.cn/large/008kKrIXgy1gsceldko9xj30rs132jy6.jpg",
        "https://tvax1.sinaimg.cn/large/008kKrIXgy1gscele99uzj31z4140hdu.jpg",
        "https://tvax2.sinaimg.cn/large/008kKrIXgy1gscelhkk4wj335p28e1l7.jpg",
        "https://tva2.sinaimg.cn/large/008kKrIXgy1gsceliy2gwj31ag1o0ha9.jpg",
        "https://cdn.jsdelivr.net/gh/1752028069/pic/614b4fe78cf7a750f0ad7b9ae17afc26.jpg",
        "https://cdn.jsdelivr.net/gh/1752028069/pic/f785f664c4f4fbbaaa0cbee29dd52c1a.jpg",
        "https://cdn.jsdelivr.net/gh/1752028069/pic/55a2f7f46aeee972efbb9fde15546212.jpg",
        "https://cdn.jsdelivr.net/gh/1752028069/pic/384c5f115543bc3dc778e71b13533965.jpg",
	];

	$image = $images[array_rand($images)];

	switch($event->path){
        case '/RandomImages/json':
			return [
				'isBase64Encoded' => false,
				'statusCode' => 200,
				'headers' => [ 
                    "content-type" => "application/json",
                    "access-control-allow-origin" => "*"
				],
				'body' => json_encode(["url => $image"])
			];
            break;
        
        case '/RandomImages/url':
            return [
                'isBase64Encoded' => false,
                'statusCode' => 200,
                'headers' => [ 
                    "content-type" => "text/text",
                    "access-control-allow-origin" => "*"
                ],
                'body' => $image
            ];
            break;

		default:
			return [
				'isBase64Encoded' => false,
				'statusCode' => 302,
				'headers' => [ 
                    "content-type" => "image/jpeg",
                    "access-control-allow-origin" => "*",
					"Location" => $image
				],
				'body' => ""
			];
			break;
	}
}
?>
