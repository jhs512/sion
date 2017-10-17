<?php
// 사용법 : $rows = getRows("SELECT * FROM article");
function getRows($sql)
{
    // 외부에 있는 $link 변수를 함수안에서 사용하겠다는 의미
    global $dbConn;

    // 빈 배열선언
    $rows = array();

    // SELECT * FROM article 쿼리 실행
    $result = mysqli_query($dbConn, $sql);

    if ($result === true) {
        return null;
    }

    // 쿼리 결과를 맵으로 받아오기
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function getRow($sql)
{
    list($row) = getRows($sql);

    return $row;
}

// 사용법 : execute("DELETE FROM article");
function execute($sql)
{
    getRows($sql);
}

function getRowValue($sql)
{
    $row = getRow($sql);

    $value = null;

    foreach ($row as $key => $val) {
        $value = $val;

        break;
    }

    return $value;
}

function getUrlArgs($url)
{
    $urlBits = explode('?', $url);

    if (count($urlBits) == 0) {
        return [];
    }

    $urlBits = explode('&', $urlBits[1]);

    foreach ($urlBits as $urlBit) {
        list($key, $val) = explode('=', $urlBit);

        $args[$key] = $val;
    }

    return $args;
}

function xmlStrToArray($xmlStr) {
	$xml = simplexml_load_string($xmlStr);
	$json = json_encode($xml);
	$array = json_decode($json, TRUE);

	$array = toSimpleArray($array);

	return $array;
}

function flatten($arr, $fKey) {
	if ( is_array($arr) and isset($arr[$fKey]) ) {
		foreach ( $arr[$fKey] as $key => $val ) {
			$arr[$key] = trim($val);
		}

		unset($arr[$fKey]);
	}

	return $arr;
}

function toSimpleArray($arr) {
	if ( !is_array($arr) ) {
		return $arr;
	}

	$arr = flatten($arr, '@attributes');

	foreach ( $arr as $key => $row ) {
		$row = flatten($row, '@attributes');

		if ( $key == 'item' ) {
			if ( is_array($row) and isset($row[0]) ) {
				return $row;
			}
			else {
				return [$row];
			}
		}

		$arr[$key] = toSimpleArray($row);
	}

	return $arr;
}
