<?php

if (!function_exists('getTranslatableData')) {
    function getTranslatableData($trans_fields, $customFields = []): array
    {

        $langs = ['en', 'ar'];

        $data = [];

        foreach ($trans_fields as $field) {

            if (!in_array($trans_fields, $customFields)) {

                foreach ($langs as $lang) {

                    $trans_field = request()->{$field . '_' . $lang};

                    if ($trans_field) {
                        $data[$field][$lang] = $trans_field;
                    }
                }
            }
        }

        return array_merge($data, $customFields);
    }
};

if (!function_exists('arabicSlug')) {
    function arabicSlug($string, $separator = '-')
    {
        if (is_null($string)) {
            return "";
        }
        $string = trim($string);
        $string = mb_strtolower($string, "UTF-8");
        // '/' and/or '\' if found and not remoeved it will change the get request route
        $string = str_replace('/', $separator, $string);
        $string = str_replace('\\', $separator, $string);
        $string = preg_replace(
            "/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/",
            "",
            $string
        );
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", $separator, $string);
        return $string;
    }
};
