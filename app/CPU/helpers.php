<?php

namespace App\CPU;

use App\Model\Admin;
use App\Model\BusinessSetting;
use App\Model\Category;
use App\Model\Color;
use App\Model\Coupon;
use App\Model\Currency;
use App\Model\Order;
use App\Model\Review;
use App\Model\Seller;
use App\Model\ShippingMethod;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Helpers
{
    public static function status($id)
    {
        if ($id == 1) {
            $x = 'active';
        } elseif ($id == 0) {
            $x = 'in-active';
        }

        return $x;
    }

    public function insurances(){
        $insurances = [
            'Blue Cross Blue Shield',
            'BCBS Alabama - Professional',
            'BCBS Arkansas',
            'BCBS DC Carefirst',
            'BCBS Minnesota',
            'BCBS Nevada',
            'BCBS New Jersey',
            'BCBS Ohio',
            'BCBS Texas',
            'BCBS Virginia (Anthem)',
            'Blue Cross Premera (AK, WA)',
            'Commercial',
            '1199 National Benefit',
            'AARP',
            'Absolute Total Care',
            'ACI',
            'Acordia/Wells Fargo',
            'ACS Benefit Services',
            'Administrative Services',
            'Advantage by Bridgeway Health Solutions',
            'Advantage by Buckeye Community Health Plan',
            'Advantage by Managed Care Services',
            'Aetna',
            'Aetna Better Health CA',
            'Aetna Better Health of FL',
            'Aetna Better Health of IL',
            'AETNA BETTER HEALTH OF KS',
            'Aetna Better Health of KY',
            'Aetna Better Health of LA',
            'Aetna Better Health of MD',
            'Aetna Better Health of MI',
            'Aetna Better Health of NJ',
            'Aetna Better Health of Ohio- Eligibility Only',
            'Aetna Better Health of PA',
            'Aetna Better Health of TX',
            'Aetna Better Health of VA',
            'Aetna Better Health of WV',
            'Aetna Dental Plans',
            'Aetna Senior Supplement',
            'Affinity Health Plan',
            'AFLAC Dental',
            'AL BCBS Dental',
            'All Savers Insurance Eligibility Only',
            'Allegiance Benefit Plan Management',
            'Alliant Health Plans',
            'Allied Benefit',
            'AllWays Health Partners',
            'AlohaCare',
            'Altus Dental',
            'AmeriBen',
            'American Health Medicare',
            'American Medical Security',
            'American National Insurance Company',
            'American Postal Workers Union - APWU',
            'American Republic Insurance Company',
            'Americhoice NJ',
            'AmeriHealth (Commercial)',
            'Amerihealth Administrators',
            'Amerihealth Caritas DE',
            'Amerihealth Caritas Healthplan New Hampshire',
            'AmeriHealth Caritas NC',
            'AmeriHealth Caritus VIP Care Plus',
            'Amerihealth DC Medicaid',
            'AmeriHealth Mercy Health Plan',
            'AmeriHealth VIP Care',
            'Ameritas Life',
            'Arise Health Plan',
            'Asuris Northwest Health',
            'Atrio Health Plans',
            'Aultcare',
            'Automated Benefit Services',
            'AUXIANT',
            'Avera Health Plans',
            'AvMed Health Plan',
            'Bankers Life and Casualty',
            'BayCare Select Health Plans',
            'BCBS MA Dental',
            'Beacon Health Options',
            'Benefit Management',
            'Benefit Management LLC KS',
            'Bind',
            'Blue Benefit Administrators of Mass',
            'Blue Cross Blue Shield of Kansas City Dental',
            'Blue Cross Medicare Advantage',
            'Blue Cross of Pennsylvania - Independence',
            'Boon Chapman Benefit Admin',
            'Boon Group',
            'Boston Medical Center',
            'Braven Health',
            'Bravo Health',
            'BridgeSpan',
            'Bridgeway Arizona',
            'Bright Health Care',
            'Buckeye Community Health',
            'CalOptima',
            'Capital District Physicians Health Plan (CDPHP)',
            'Capitol Administators',
            'CAPROCK',
            'Care 1st Healthplan of AZ',
            'Care Improvement Plus',
            'Care N\' Care',
            'Care Oregon',
            'Care Plus',
            'Carefirst Administrators',
            'CareMore',
            'CareSource Health',
            'Caresource Indiana',
            'Cariten Healthcare',
            'CDS Group Health',
            'Celtic Insurance',
            'Celticare',
            'Cencal',
            'Cenpatico - Indiana',
            'Cenpatico-Georgia',
            'Cenpatico-Kansas',
            'Cenpatico-Ohio',
            'Cenpatico-South Carolina',
            'Centene',
            'Central California Alliance for Health',
            'Central Reserve Insurance Company',
            'Central States Fund',
            'Cerner Health',
            'ChampVa',
            'CHCS Services- Eligibility Only',
            'Christian Brothers Services',
            'Christie Student Health Plan',
            'Christus Health NM HIX',
            'CHRISTUS Health Plan NM Medicare Advantage',
            'Christus Health Plan of TX and LA',
            'Cigna',
            'Cigna Elig Testing Only',
            'Claimsbridge',
            'Clear Health Alliance',
            'Clover Health',
            'Colonial Penn',
            'Colorado Access',
            'Community Care of Oklahoma',
            'Community Health Center Network',
            'Community Health Center Network Medicaid',
            'Community Health Choice',
            'Community Health Group',
            'Community Health Plan Inc Market Exchange',
            'Community Health Plan of Washington',
            'Concentrix Insurance Solutions',
            'Connecticare',
            'Connecticare Medicare',
            'Continental General Insurance',
            'Cook Childrens Health Plan',
            'Cooperative Benefit Administrators',
            'Cooperative Managed Care Services/ MDWise Medicaid Plans',
            'CORE Test',
            'Coresource FMH',
            'Coresource Little Rock',
            'Coresource MD, PA, IL, AZ, MN',
            'Coresource NC, IN',
            'Coresource OH',
            'Corporate Benefit Services',
            'CountyCare',
            'Covenant Administrators, Inc',
            'Coventry - Georgia (Promina ASO)',
            'Coventry Health and Life - Oklahoma',
            'Coventry Health and Life (TN)',
            'Cox Health Plan',
            'Davis Vision',
            'Dean Health',
            'Delta Dental (HSCSN)',
            'Delta Dental of AL',
            'Delta Dental of Arkansas',
            'Delta Dental of California',
            'Delta Dental of Colorado',
            'Delta Dental of Delaware',
            'Delta Dental of Florida',
            'Delta Dental of Georgia',
            'Delta Dental of Illinois',
            'Delta Dental of Indiana',
            'Delta Dental of Iowa',
            'Delta Dental of Michigan',
            'Delta Dental of Minnesota',
            'Delta Dental of Mississippi',
            'Delta Dental of Montana',
            'Delta Dental of Nevada',
            'Delta Dental of New Mexico',
            'Delta Dental of New York',
            'Delta Dental of OK',
            'Delta Dental of Rhode Island',
            'Delta Dental of Texas',
            'Delta Dental of Utah',
            'Delta Dental of Virginia',
            'Delta Dental of Washington State',
            'Delta Dental of Wisconsin',
            'DeltaCare USA - Encounters',
            'DENTAL3',
            'DentaQuest',
            'Denver Health',
            'Denver Health and Hospital Authority',
            'Denver Health Test',
            'Deseret Mutual',
            'Devoted Health',
            'Directors Guild',
            'Diversified Administration',
            'Diversified Group-MCA',
            'Driscoll',
            'EDS Healthchoice',
            'Educators Mutual Insurance',
            'El Paso First-Chip',
            'Elderplan',
            'Emblem/Group Health Inc (GHI)',
            'Employee Benefit Management Services, Inc (EBMS)',
            'Essence Healthcare',
            'Everence Financial',
            'Fallon Health Plan',
            'Farm Bureau Health',
            'Fidelis Care New York',
            'First Choice Health',
            'First Choice VIP Care Plan - SC',
            'First Medical Health Plan',
            'FirstCare',
            'Florida Health Care Plans',
            'Freedom Health Medicare Advantage',
            'Gateway Health Plan',
            'Geisinger Health Plan',
            'GEMCare',
            'Gilsbar',
            'Golden Rule',
            'Government Employees Hospital Association (GEHA)',
            'Great American Life',
            'Great West Life',
            'Group and Pension Administrators',
            'Group Health Cooperative',
            'Guardian Life Insurance Co. of America – Dental',
            'Harvard Pilgrim',
            'Humana',
            'Hawaii Dental Services (HDS) / Delta Dental of Hawaii',
            'Hawaii Mainland Admin',
            'Hawaii Management Alliance Association',
            'Health Alliance Plan of Illinois',
            'Health Alliance Plan of Michigan',
            'Health Choice Arizona',
            'Health First Health Plan',
            'Health Net of the North East',
            'Health New England',
            'Health Partners of Minnesota',
            'Health Plan of San Joaquin',
            'Health Plan of San Mateo',
            'Health Plan of Upper Ohio Valley',
            'Health Plans Inc',
            'Health Scope',
            'Health Services for Children with Special Needs',
            'Health Smart Benefit Solutions',
            'Healthcare Management Administrators',
            'HealthCare Options',
            'Healthchoice of Oklahoma',
            'Healthcomp',
            'Healthcomp - BAS',
            'HealthEZ',
            'Healthfirst New Jersey',
            'HealthFirst NY',
            'HealthGram',
            'HealthNet of Arizona',
            'HealthNet of California & Oregon',
            'HealthScope Benefits Inc',
            'Healthsmart Benefit Solutions',
            'HealthSpring',
            'Healthy Blue Nebraska',
            'Healthy Blue of LA',
            'Healthy Blue of MO',
            'Healthy Blue of NC',
            'HIP NY',
            'Hometown Health',
            'Horizon NJ Health',
            'Hudson Health Plan',
            'Humana',
            'Independent Health',
            'Indiana University Health Plan',
            'Indiana University Health Plan Medicare Advantage',
            'Inland Empire Health Plan',
            'Insurers Administrative Corporation',
            'Jai Medical Systems',
            'John Hopkins Advantage MD',
            'John Hopkins Health Plan',
            'John Hopkins US Family Health Plan (USFHP)',
            'Kaiser Foundation Health Plan of Colorado',
            'Kaiser Foundation Mid-Atlantic',
            'Kaiser NW Region',
            'Kaiser of Hawaii',
            'Kaiser Permanente of California',
            'Kaiser Permanente of Georgia',
            'Kaiser Permanente of Southern CA',
            'Katy Medical Claims',
            'Kelsey Seybold',
            'Kemper Benefits',
            'Key Benefit Administrators',
            'Key Solutions',
            'Keystone First Community Health Plan',
            'Keystone Mercy Health',
            'Keystone VIP Choice',
            'LA Care Health Plan',
            'LACare',
            'Liberty Dental',
            'Lifewise Health Plan of Oregon',
            'Lifewise Health Plan of Washington',
            'Loomis Co',
            'Loyal American Life Insurance Company',
            'Magellan Health Services',
            'MagnaCare',
            'Magnolia Health Plan',
            'Maine Community Health Options',
            'MAMSI Health Plan',
            'Managed Care of North America',
            'Managed Health Services Indiana',
            'Managed Health Services Wisconsin',
            'Maricopa Care Advantage (AZ)',
            'Martins Point Health Care',
            'Maryland Physician Care DOS after 12/31/2020',
            'Mayo Management Service Inc',
            'McLaren',
            'MedCost',
            'Medica',
            'Medica Government Programs',
            'Medica Health Care Plan (Florida)',
            'Medica Health Plan Solutions',
            'Medica IFB',
            'Medical Associates Health Plan',
            'Medical Benefit Companies (MedBen)',
            'Medical Card System',
            'Medical Mutual of Ohio',
            'Medicare y Mucho Mas',
            'Medico Insurance Co',
            'Medigold/Mt Carmel',
            'Med-Pay',
            'Medstar Family Choice',
            'Mercy Care Plan (Arizona)',
            'MERCY MARICOPA INTEGRATED CARE',
            'Meridian Health Plan',
            'Meridian Health Plan of Michigan Complete',
            'Meritain District 9',
            'Meritain Health',
            'MetLife Dental',
            'MetroPlus Health Plan',
            'Metropolitan Health Plan',
            'Missoula County',
            'Moda Health',
            'Molina California',
            'Molina Healthcare of Florida',
            'Molina Healthcare of Idaho',
            'Molina Healthcare of NV',
            'MOLINA HEALTHCARE OF NY',
            'Molina Michigan',
            'Molina NM',
            'Molina of IA',
            'Molina of Illinois',
            'Molina of Puerto Rico',
            'Molina Ohio',
            'Molina SC',
            'Molina Texas',
            'Molina Utah',
            'Molina Washington',
            'Molina Wisconsin',
            'Municipal Health',
            'MUTUAL HEALTH SERVICES',
            'Mutual of Omaha (Commercial)',
            'MVP Health Care',
            'National Association of Letter Carriers',
            'National Telecommunications Coop Association (NTCA)',
            'Nationwide',
            'Neighborhood Health Plan RI Exchange',
            'Network Health',
            'Network Health Insurance Corp',
            'Network Health Plan',
            'New ERA Life',
            'Nippon Life',
            'Nova Healthcare Administrators',
            'NovaSys',
            'Optima/Sentara',
            'Optimum Healthcare',
            'Optum Medical Network',
            'Oscar Health',
            'Oxford Health Plans',
            'PA Medicare Advantage',
            'Pacific Source Health Plan',
            'Pacificare Arizona',
            'Pacificare California',
            'Pacificare Colorado',
            'Pacificare Oklahoma',
            'Pacificare Texas',
            'Pacificare Washington',
            'PacificSource Community Solutions Medicaid',
            'PacificSource Medicare',
            'Pan-American Life Insurance',
            'Paramount Health',
            'Parkland Community Health Plan',
            'Partners National Health Plans of NC',
            'Partnership Health Plan of California',
            'Passport Advantage Plan',
            'Passport Health Plan',
            'Peach State Health Plan',
            'People Health',
            'Personal Insurance Administrators',
            'PHP of Michigan',
            'Physicians Health Plan Northern Indiana',
            'Physicians Health Plan of Michigan Medicare',
            'Physicians Mutual Dental',
            'Physicians Mutual Insurance Company',
            'PHYSICIANS PLUS',
            'Piedmont Community Health Plan',
            'Pittman and Associates',
            'Plan De Salud Hospital Menonita',
            'Planned Administrator Inc',
            'Preferred Administrators',
            'Preferred Administrators-Childrens Hospital',
            'Preferred Care Partners',
            'Preferred Medicare Choice',
            'Preferred Network Access',
            'Preferred One',
            'Prestige Health Choice',
            'PrimeWest Health',
            'Priority Health',
            'Professional Benefits Administrators',
            'Prominence Health Plan',
            'Providence Health Plan',
            'Public Employers Health Plan',
            'QA Emblem/GHI',
            'Qualchoice',
            'Quartz ASO',
            'QuikTrip Corporation',
            'Regence BCBS OR Dental',
            'Regence Group Administrators',
            'Reserve National Insurance Company',
            'Rocky Mountain Health Plan',
            'S and S HealthCare Stratagies',
            'SAMBA',
            'San Francisco Health Plan',
            'Sana Benefits',
            'Sanford Health Plan',
            'Santa Clara Family Health',
            'SCION Dental',
            'Scott & White Health Plan',
            'Security Health Plan',
            'Select Health of South Carolina',
            'Select Health of Utah',
            'SelectCare of Texas',
            'Senior Care Action Network (SCAN)',
            'Senior Whole Health',
            'Senior Whole Health MA',
            'Senior Whole Health of NY',
            'Sentinel Security Life Insurance Co',
            'Sharp Health Plan',
            'Significa Benefit Service',
            'Simply Healthcare Plans',
            'SisCo Benefits',
            'Soundpath Health',
            'Southern California UFCW & Food Employers Pension',
            'State Farm',
            'SummaCare Health Plan',
            'Sunshine State Health Plan',
            'Superior Health Plan of Texas',
            'Test',
            'Texas CHIP',
            'Texas Premier Plan-Medicaid',
            'Texas-Christus Health Plan Medicaid',
            'The Health Plan',
            'Thrivant Financial',
            'Trans Choice Key Benefit Administrators',
            'TransAmerica Life',
            'Trillium Community Health Plan',
            'Trustmark Insurance',
            'TUFTS Health Plan',
            'UCare of Minnesota',
            'UHC',
            'Umpqua Health Alliance',
            'UMR-Wausau',
            'UMWA Health and Retirement Funds',
            'UniCare',
            'Unicare - Dental',
            'Uniformed Services Family Health Plan - St Vincent',
            'Union Pacific Railroad Employees Health Systems',
            'Unite Here Health',
            'United American Insurance Co',
            'United Concordia Companies - Dental',
            'United Healthcare Community Plan',
            'United Healthcare Plan of River Valley',
            'United Healthcare Sierra Health Services',
            'United Healthcare Student Resources',
            'United Teacher Associates',
            'Univera',
            'University Family Care',
            'University Family Care Maricopa Health Plan',
            'University Health Alliance',
            'University of Utah Health Plans',
            'University Physicians Care Advantage AZ',
            'UPMC Health Plan (Tristate)',
            'USAA Life Insurance Company',
            'Valley Health Plan',
            'Vantage Health Plan',
            'Village Family Practice',
            'Virginia Premier',
            'VIVA Health',
            'VNSNY CHOICE Health Plans',
            'Vytra',
            'Web TPA',
            'Wellcare/Harmony/Healthease/Staywell',
            'Wellpoint',
            'Western and Southern Financial Group',
            'Western Health Advantage',
            'Windsor Medicare Extra',
            'Wisconsin Medicaid Well Woman Program',
            'Wisconsin Physician Services Commercial (WPS)',
            'WPS Health Insurance',
            'Yamhill CCO (Physical Health)',
            'YourCare Health Plan',
            'Medicaid',
            'Arkansas Medicaid',
            'California Medicaid (MediCal)',
            'North Carolina Medicaid',
            'Oklahoma Medicaid',
            'Texas Medicaid',
            'Medicare',
            'Military',
            'Tricare East',
            'Tricare for Life',
            'Tricare West Region',
            'VA Fee Basis Program'
        ];
        return $insurances;
    }

    public static function transaction_formatter($transaction)
    {
        if ($transaction['paid_by'] == 'customer') {
            $user = User::find($transaction['payer_id']);
            $payer = $user->f_name . ' ' . $user->l_name;
        } elseif ($transaction['paid_by'] == 'seller') {
            $user = Seller::find($transaction['payer_id']);
            $payer = $user->f_name . ' ' . $user->l_name;
        } elseif ($transaction['paid_by'] == 'admin') {
            $user = Admin::find($transaction['payer_id']);
            $payer = $user->name;
        }

        if ($transaction['paid_to'] == 'customer') {
            $user = User::find($transaction['payment_receiver_id']);
            $receiver = $user->f_name . ' ' . $user->l_name;
        } elseif ($transaction['paid_to'] == 'seller') {
            $user = Seller::find($transaction['payment_receiver_id']);
            $receiver = $user->f_name . ' ' . $user->l_name;
        } elseif ($transaction['paid_to'] == 'admin') {
            $user = Admin::find($transaction['payment_receiver_id']);
            $receiver = $user->name;
        }

        $transaction['payer_info'] = $payer;
        $transaction['receiver_info'] = $receiver;

        return $transaction;
    }

    public static function get_customer($request = null)
    {
        $user = null;
        if (auth('customer')->check()) {
            $user = auth('customer')->user(); // for web
        } elseif ($request != null && $request->user() != null) {
            $user = $request->user(); //for api
        } elseif (session()->has('customer_id')) {
            $user = User::find(session('customer_id'));
        }

        if ($user == null) {
            $user = 'offline';
        }

        return $user;
    }

    public static function coupon_discount($request)
    {
        $discount = 0;
        $user = Helpers::get_customer($request);
        $couponLimit = Order::where('customer_id', $user->id)
            ->where('coupon_code', $request['coupon_code'])->count();

        $coupon = Coupon::where(['code' => $request['coupon_code']])
            ->where('limit', '>', $couponLimit)
            ->where('status', '=', 1)
            ->whereDate('start_date', '<=', Carbon::parse()->toDateString())
            ->whereDate('expire_date', '>=', Carbon::parse()->toDateString())->first();

        if (isset($coupon)) {
            $total = 0;
            foreach (CartManager::get_cart(CartManager::get_cart_group_ids($request)) as $cart) {
                $product_subtotal = $cart['price'] * $cart['quantity'];
                $total += $product_subtotal;
            }
            if ($total >= $coupon['min_purchase']) {
                if ($coupon['discount_type'] == 'percentage') {
                    $discount = (($total / 100) * $coupon['discount']) > $coupon['max_discount'] ? $coupon['max_discount'] : (($total / 100) * $coupon['discount']);
                } else {
                    $discount = $coupon['discount'];
                }
            }
        }

        return $discount;
    }

    public static function default_lang()
    {
        if (strpos(url()->current(), '/api')) {
            $lang = App::getLocale();
        } elseif (session()->has('local')) {
            $lang = session('local');
        } else {
            $data = Helpers::get_business_settings('language');
            $code = 'en';
            $direction = 'ltr';
            foreach ($data as $ln) {
                if (array_key_exists('default', $ln) && $ln['default']) {
                    $code = $ln['code'];
                    if (array_key_exists('direction', $ln)) {
                        $direction = $ln['direction'];
                    }
                }
            }
            session()->put('local', $code);
            Session::put('direction', $direction);
            $lang = $code;
        }
        return $lang;
    }

    public static function rating_count($product_id, $rating)
    {
        return Review::where(['product_id' => $product_id, 'rating' => $rating])->count();
    }

    public static function get_business_settings($name)
    {
        $config = null;
        $check = ['currency_model', 'currency_symbol_position', 'system_default_currency', 'language', 'company_name'];

        if (in_array($name, $check) == true && session()->has($name)) {
            $config = session($name);
        } else {
            $data = BusinessSetting::where(['type' => $name])->first();
            if (isset($data)) {
                $config = json_decode($data['value'], true);
                if (is_null($config)) {
                    $config = $data['value'];
                }
            }

            if (in_array($name, $check) == true) {
                session()->put($name, $config);
            }
        }

        return $config;
    }

    public static function get_settings($object, $type)
    {
        $config = null;
        foreach ($object as $setting) {
            if ($setting['type'] == $type) {
                $config = $setting;
            }
        }
        return $config;
    }

    public static function get_shipping_methods($seller_id, $type)
    {
        return ShippingMethod::where(['status' => 1])->where(['creator_id' => $seller_id, 'creator_type' => $type])->get();
    }

    public static function get_image_path($type)
    {
        $path = asset('storage/app/public/brand');
        return $path;
    }

    public static function product_data_formatting($data, $multi_data = false)
    {
        $storage = [];
        if ($multi_data == true) {
            foreach ($data as $item) {
                $variation = [];
                $item['category_ids'] = json_decode($item['category_ids']);
                $item['images'] = json_decode($item['images']);
                $item['colors'] = Color::whereIn('code', json_decode($item['colors']))->get(['name', 'code']);
                $attributes = [];
                if (json_decode($item['attributes']) != null) {
                    foreach (json_decode($item['attributes']) as $attribute) {
                        array_push($attributes, (integer)$attribute);
                    }
                }
                $item['attributes'] = $attributes;
                $item['choice_options'] = json_decode($item['choice_options']);
                foreach (json_decode($item['variation'], true) as $var) {
                    array_push($variation, [
                        'type' => $var['type'],
                        'price' => (double)$var['price'],
                        'sku' => $var['sku'],
                        'qty' => (integer)$var['qty'],
                    ]);
                }
                $item['variation'] = $variation;
                array_push($storage, $item);
            }
            $data = $storage;
        } else {
            $variation = [];
            $data['category_ids'] = json_decode($data['category_ids']);
            $data['images'] = json_decode($data['images']);
            $data['colors'] = Color::whereIn('code', json_decode($data['colors']))->get(['name', 'code']);
            $attributes = [];
            if (json_decode($data['attributes']) != null) {
                foreach (json_decode($data['attributes']) as $attribute) {
                    array_push($attributes, (integer)$attribute);
                }
            }
            $data['attributes'] = $attributes;
            $data['choice_options'] = json_decode($data['choice_options']);
            foreach (json_decode($data['variation'], true) as $var) {
                array_push($variation, [
                    'type' => $var['type'],
                    'price' => (double)$var['price'],
                    'sku' => $var['sku'],
                    'qty' => (integer)$var['qty'],
                ]);
            }
            $data['variation'] = $variation;
        }

        return $data;
    }

    public static function units()
    {
        $x = ['kg', 'pc', 'gms', 'ltrs'];
        return $x;
    }

    public static function remove_invalid_charcaters($str)
    {
        return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);
    }

    public static function saveJSONFile($code, $data)
    {
        ksort($data);
        $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents(base_path('resources/lang/en/messages.json'), stripslashes($jsonData));
    }

    public static function combinations($arrays)
    {
        $result = [[]];
        foreach ($arrays as $property => $property_values) {
            $tmp = [];
            foreach ($result as $result_item) {
                foreach ($property_values as $property_value) {
                    $tmp[] = array_merge($result_item, [$property => $property_value]);
                }
            }
            $result = $tmp;
        }
        return $result;
    }

    public static function error_processor($validator)
    {
        $err_keeper = [];
        foreach ($validator->errors()->getMessages() as $index => $error) {
            array_push($err_keeper, ['code' => $index, 'message' => $error[0]]);
        }
        return $err_keeper;
    }

    public static function currency_load()
    {
        $default = Helpers::get_business_settings('system_default_currency');
        $current = \session('system_default_currency_info');
        if (session()->has('system_default_currency_info') == false || $default != $current['id']) {
            $id = Helpers::get_business_settings('system_default_currency');
            $currency = Currency::find($id);
            session()->put('system_default_currency_info', $currency);
            session()->put('currency_code', $currency->code);
            session()->put('currency_symbol', $currency->symbol);
            session()->put('currency_exchange_rate', $currency->exchange_rate);
        }
    }

    public static function currency_converter($amount)
    {
        $currency_model = Helpers::get_business_settings('currency_model');
        if ($currency_model == 'multi_currency') {
            if (session()->has('usd')) {
                $usd = session('usd');
            } else {
                $usd = Currency::where(['code' => 'USD'])->first()->exchange_rate;
                session()->put('usd', $usd);
            }
            $my_currency = \session('currency_exchange_rate');
            $rate = $my_currency / $usd;
        } else {
            $rate = 1;
        }

        return Helpers::set_symbol(round($amount * $rate, 2));
    }

    public static function language_load()
    {
        if (\session()->has('language_settings')) {
            $language = \session('language_settings');
        } else {
            $language = BusinessSetting::where('type', 'language')->first();
            \session()->put('language_settings', $language);
        }
        return $language;
    }

    public static function tax_calculation($price, $tax, $tax_type)
    {
        $amount = ($price / 100) * $tax;
        return $amount;
    }

    public static function get_price_range($product)
    {
        $lowest_price = $product->unit_price;
        $highest_price = $product->unit_price;

        foreach (json_decode($product->variation) as $key => $variation) {
            if ($lowest_price > $variation->price) {
                $lowest_price = round($variation->price, 2);
            }
            if ($highest_price < $variation->price) {
                $highest_price = round($variation->price, 2);
            }
        }

        $lowest_price = Helpers::currency_converter($lowest_price - Helpers::get_product_discount($product, $lowest_price));
        $highest_price = Helpers::currency_converter($highest_price - Helpers::get_product_discount($product, $highest_price));

        if ($lowest_price == $highest_price) {
            return $lowest_price;
        }
        return $lowest_price . ' - ' . $highest_price;
    }

    public static function get_product_discount($product, $price)
    {
        $discount = 0;
        if ($product->discount_type == 'percent') {
            $discount = ($price * $product->discount) / 100;
        } elseif ($product->discount_type == 'flat') {
            $discount = $product->discount;
        }

        return floatval($discount);
    }

    public static function module_permission_check($mod_name)
    {
        $permission = auth('admin')->user()->role->module_access;
        if (isset($permission) && in_array($mod_name, (array)json_decode($permission)) == true) {
            return true;
        }

        if (auth('admin')->user()->admin_role_id == 1) {
            return true;
        }
        return false;
    }

    public static function convert_currency_to_usd($price)
    {
        $currency_model = Helpers::get_business_settings('currency_model');
        if ($currency_model == 'multi_currency') {
            Helpers::currency_load();
            $code = session('currency_code') == null ? 'USD' : session('currency_code');
            $currency = Currency::where('code', $code)->first();
            $price = floatval($price) / floatval($currency->exchange_rate);
        } else {
            $price = floatval($price);
        }

        return $price;
    }

    public static function order_status_update_message($status)
    {
        if ($status == 'pending') {
            $data = BusinessSetting::where('type', 'order_pending_message')->first()->value;
        } elseif ($status == 'confirmed') {
            $data = BusinessSetting::where('type', 'order_confirmation_msg')->first()->value;
        } elseif ($status == 'processing') {
            $data = BusinessSetting::where('type', 'order_processing_message')->first()->value;
        } elseif ($status == 'out_for_delivery') {
            $data = BusinessSetting::where('type', 'out_for_delivery_message')->first()->value;
        } elseif ($status == 'delivered') {
            $data = BusinessSetting::where('type', 'order_delivered_message')->first()->value;
        } elseif ($status == 'returned') {
            $data = BusinessSetting::where('type', 'order_returned_message')->first()->value;
        } elseif ($status == 'failed') {
            $data = BusinessSetting::where('type', 'order_failed_message')->first()->value;
        } elseif ($status == 'delivery_boy_delivered') {
            $data = BusinessSetting::where('type', 'delivery_boy_delivered_message')->first()->value;
        } elseif ($status == 'del_assign') {
            $data = BusinessSetting::where('type', 'delivery_boy_assign_message')->first()->value;
        } elseif ($status == 'ord_start') {
            $data = BusinessSetting::where('type', 'delivery_boy_start_message')->first()->value;
        } else {
            $data = '{"status":"0","message":""}';
        }

        $res = json_decode($data, true);

        if ($res['status'] == 0) {
            return 0;
        }
        return $res['message'];
    }

    public static function send_push_notif_to_device($fcm_token, $data)
    {
        $key = BusinessSetting::where(['type' => 'push_notification_key'])->first()->value;
        $url = "https://fcm.googleapis.com/fcm/send";
        $header = array("authorization: key=" . $key . "",
            "content-type: application/json"
        );

        if (isset($data['order_id']) == false) {
            $data['order_id'] = null;
        }

        $postdata = '{
            "to" : "' . $fcm_token . '",
            "data" : {
                "title" :"' . $data['title'] . '",
                "body" : "' . $data['description'] . '",
                "image" : "' . $data['image'] . '",
                "order_id":"' . $data['order_id'] . '",
                "is_read": 0
              },
              "notification" : {
                "title" :"' . $data['title'] . '",
                "body" : "' . $data['description'] . '",
                "image" : "' . $data['image'] . '",
                "order_id":"' . $data['order_id'] . '",
                "title_loc_key":"' . $data['order_id'] . '",
                "is_read": 0,
                "icon" : "new",
                "sound" : "default"
              }
        }';

        $ch = curl_init();
        $timeout = 120;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // Get URL content
        $result = curl_exec($ch);
        // close handle to release resources
        curl_close($ch);

        return $result;
    }

    public static function send_push_notif_to_topic($data)
    {
        $key = BusinessSetting::where(['type' => 'push_notification_key'])->first()->value;

        $url = "https://fcm.googleapis.com/fcm/send";
        $header = ["authorization: key=" . $key . "",
            "content-type: application/json",
        ];

        $image = asset('storage/app/public/notification') . '/' . $data['image'];
        $postdata = '{
            "to" : "/topics/sixvalley",
            "data" : {
                "title":"' . $data->title . '",
                "body" : "' . $data->description . '",
                "image" : "' . $image . '",
                "is_read": 0
              },
              "notification" : {
                "title":"' . $data->title . '",
                "body" : "' . $data->description . '",
                "image" : "' . $image . '",
                "title_loc_key":"' . $data['order_id'] . '",
                "is_read": 0,
                "icon" : "new",
                "sound" : "default"
              }
        }';

        $ch = curl_init();
        $timeout = 120;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // Get URL content
        $result = curl_exec($ch);
        // close handle to release resources
        curl_close($ch);

        return $result;
    }

    public static function get_seller_by_token($request)
    {
        $data = '';
        $success = 0;

        $token = explode(' ', $request->header('authorization'));
        if (count($token) > 1 && strlen($token[1]) > 30) {
            $seller = Seller::where(['auth_token' => $token['1']])->first();
            if (isset($seller)) {
                $data = $seller;
                $success = 1;
            }
        }

        return [
            'success' => $success,
            'data' => $data
        ];
    }

    public static function remove_dir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir") Helpers::remove_dir($dir . "/" . $object); else unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }

    public static function currency_code()
    {
        Helpers::currency_load();
        if (session()->has('currency_symbol')) {
            $symbol = session('currency_symbol');
            $code = Currency::where(['symbol' => $symbol])->first()->code;
        } else {
            $system_default_currency_info = session('system_default_currency_info');
            $code = $system_default_currency_info->code;
        }
        return $code;
    }

    public static function get_language_name($key)
    {
        $values = Helpers::get_business_settings('language');
        foreach ($values as $value) {
            if ($value['code'] == $key) {
                $key = $value['name'];
            }
        }

        return $key;
    }

    public static function setEnvironmentValue($envKey, $envValue)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
        $oldValue = env($envKey);
        if (strpos($str, $envKey) !== false) {
            $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}", $str);
        } else {
            $str .= "{$envKey}={$envValue}\n";
        }
        $fp = fopen($envFile, 'w');
        fwrite($fp, $str);
        fclose($fp);
        return $envValue;
    }

    public static function requestSender()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => route(base64_decode('YWN0aXZhdGlvbi1jaGVjaw==')),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        return $data;
    }

    public static function sales_commission($order)
    {
        $order_summery = OrderManager::order_summary($order);
        $order_total = $order_summery['subtotal'] - $order_summery['total_discount_on_product'] - $order['discount_amount'];
        $commission_amount = 0;

        if ($order['seller_is'] == 'seller') {
            $seller = Seller::find($order['seller_id']);
            if (isset($seller) && $seller['sales_commission_percentage'] !== null) {
                $commission = $seller['sales_commission_percentage'];
            } else {
                $commission = Helpers::get_business_settings('sales_commission');
            }
            $commission_amount = (($order_total / 100) * $commission);
        }
        return $commission_amount;
    }

    public static function categoryName($id)
    {
        return Category::select('name')->find($id)->name;
    }

    public static function set_symbol($amount)
    {
        $position = Helpers::get_business_settings('currency_symbol_position');
        if (!is_null($position) && $position == 'left') {
            $string = currency_symbol() . '' . number_format($amount, 2);
        } else {
            $string = number_format($amount, 2) . '' . currency_symbol();
        }
        return $string;
    }

    public static function pagination_limit()
    {
        $pagination_limit = BusinessSetting::where('type', 'pagination_limit')->first();
        if ($pagination_limit != null) {
            return $pagination_limit->value;
        } else {
            return 25;
        }

    }

    public static function gen_mpdf($view, $file_prefix, $file_postfix)
    {
        $mpdf = new \Mpdf\Mpdf(['default_font' => 'FreeSerif', 'mode' => 'utf-8', 'format' => [190, 236]]);
        $mpdf->AddPage('L', '', '', '', '', 0, 0, 0, '', '', '');
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;

        $mpdf_view = $view;
        $mpdf_view = $mpdf_view->render();
        $mpdf->WriteHTML($mpdf_view);
        $mpdf->Output($file_prefix . $file_postfix . '.pdf', 'D');
    }
}


if (!function_exists('currency_symbol')) {
    function currency_symbol()
    {
        Helpers::currency_load();
        if (\session()->has('currency_symbol')) {
            $symbol = \session('currency_symbol');
        } else {
            $system_default_currency_info = \session('system_default_currency_info');
            $symbol = $system_default_currency_info->symbol;
        }
        return $symbol;
    }
}
//formats currency
if (!function_exists('format_price')) {
    function format_price($price)
    {
        return number_format($price, 2) . currency_symbol();
    }
}

function translate($key)
{
    $local = Helpers::default_lang();
    App::setLocale($local);

    $lang_array = include(base_path('resources/lang/' . $local . '/messages.php'));
    $processed_key = ucfirst(str_replace('_', ' ', Helpers::remove_invalid_charcaters($key)));

    if (!array_key_exists($key, $lang_array)) {
        $lang_array[$key] = $processed_key;
        $str = "<?php return " . var_export($lang_array, true) . ";";
        file_put_contents(base_path('resources/lang/' . $local . '/messages.php'), $str);
        $result = $processed_key;
    } else {
        $result = __('messages.' . $key);
    }
    return $result;
}
