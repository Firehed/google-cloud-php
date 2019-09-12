<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace GPBMetadata\Google\Cloud\Asset\V1;

class AssetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa80e0a29676f6f676c652f636c6f75642f61737365742f76312f617373" .
            "65745f736572766963652e70726f746f1215676f6f676c652e636c6f7564" .
            "2e61737365742e76311a22676f6f676c652f636c6f75642f61737365742f" .
            "76312f6173736574732e70726f746f1a23676f6f676c652f6c6f6e677275" .
            "6e6e696e672f6f7065726174696f6e732e70726f746f1a1f676f6f676c65" .
            "2f70726f746f6275662f74696d657374616d702e70726f746f1a17676f6f" .
            "676c652f6170692f636c69656e742e70726f746f22df010a134578706f72" .
            "7441737365747352657175657374120e0a06706172656e74180120012809" .
            "122d0a09726561645f74696d6518022001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012130a0b61737365745f747970" .
            "657318032003280912380a0c636f6e74656e745f7479706518042001280e" .
            "32222e676f6f676c652e636c6f75642e61737365742e76312e436f6e7465" .
            "6e7454797065123a0a0d6f75747075745f636f6e66696718052001280b32" .
            "232e676f6f676c652e636c6f75642e61737365742e76312e4f7574707574" .
            "436f6e6669672281010a144578706f7274417373657473526573706f6e73" .
            "65122d0a09726561645f74696d6518012001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d70123a0a0d6f75747075745f63" .
            "6f6e66696718022001280b32232e676f6f676c652e636c6f75642e617373" .
            "65742e76312e4f7574707574436f6e66696722ba010a1c42617463684765" .
            "74417373657473486973746f727952657175657374120e0a06706172656e" .
            "7418012001280912130a0b61737365745f6e616d65731802200328091238" .
            "0a0c636f6e74656e745f7479706518032001280e32222e676f6f676c652e" .
            "636c6f75642e61737365742e76312e436f6e74656e7454797065123b0a10" .
            "726561645f74696d655f77696e646f7718042001280b32212e676f6f676c" .
            "652e636c6f75642e61737365742e76312e54696d6557696e646f7722550a" .
            "1d4261746368476574417373657473486973746f7279526573706f6e7365" .
            "12340a0661737365747318012003280b32242e676f6f676c652e636c6f75" .
            "642e61737365742e76312e54656d706f72616c417373657422ab010a0c4f" .
            "7574707574436f6e66696712400a0f6763735f64657374696e6174696f6e" .
            "18012001280b32252e676f6f676c652e636c6f75642e61737365742e7631" .
            "2e47637344657374696e6174696f6e4800124a0a1462696771756572795f" .
            "64657374696e6174696f6e18022001280b322a2e676f6f676c652e636c6f" .
            "75642e61737365742e76312e426967517565727944657374696e6174696f" .
            "6e4800420d0a0b64657374696e6174696f6e22430a0e4763734465737469" .
            "6e6174696f6e120d0a03757269180120012809480012140a0a7572695f70" .
            "72656669781802200128094800420c0a0a6f626a6563745f75726922440a" .
            "13426967517565727944657374696e6174696f6e120f0a07646174617365" .
            "74180120012809120d0a057461626c65180220012809120d0a05666f7263" .
            "651803200128082a6c0a0b436f6e74656e7454797065121c0a18434f4e54" .
            "454e545f545950455f554e5350454349464945441000120c0a085245534f" .
            "555243451001120e0a0a49414d5f504f4c4943591002120e0a0a4f52475f" .
            "504f4c494359100412110a0d4143434553535f504f4c4943591005329803" .
            "0a0c4173736574536572766963651283010a0c4578706f72744173736574" .
            "73122a2e676f6f676c652e636c6f75642e61737365742e76312e4578706f" .
            "7274417373657473526571756573741a1d2e676f6f676c652e6c6f6e6772" .
            "756e6e696e672e4f7065726174696f6e222882d3e4930222221d2f76312f" .
            "7b706172656e743d2a2f2a7d3a6578706f72744173736574733a012a12b2" .
            "010a154261746368476574417373657473486973746f727912332e676f6f" .
            "676c652e636c6f75642e61737365742e76312e4261746368476574417373" .
            "657473486973746f7279526571756573741a342e676f6f676c652e636c6f" .
            "75642e61737365742e76312e426174636847657441737365747348697374" .
            "6f7279526573706f6e7365222e82d3e493022812262f76312f7b70617265" .
            "6e743d2a2f2a7d3a6261746368476574417373657473486973746f72791a" .
            "4dca4119636c6f756461737365742e676f6f676c65617069732e636f6dd2" .
            "412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f61" .
            "7574682f636c6f75642d706c6174666f726d429c010a19636f6d2e676f6f" .
            "676c652e636c6f75642e61737365742e7631421141737365745365727669" .
            "636550726f746f50015a3a676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f636c6f75642f6173736574" .
            "2f76313b6173736574aa0215476f6f676c652e436c6f75642e4173736574" .
            "2e5631ca0215476f6f676c655c436c6f75645c41737365745c5631620670" .
            "726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

