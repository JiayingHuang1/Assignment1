<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class character {

    //mock data : an array of records
    /*protected $data = [
        '1' => [

            'name' => 'Don Vito Corleone',
            'description' => 'The first godfather was a man of gentlemanly dignity. As a teenager, he'
            . ' lived in Sicily before fleeing to the United States to establish the Mafia empire. As'
            . ' the head of the Mafia, he often broke the law. However, he was also the patron saint of '
            . 'many of the weaker commoners and was loved by the people. He has a rule that he never deals '
            . 'drugs. He rejected the drug Lord Surlozzos demands, thus inflating tensions with several other New York Mafia families.',
            'height'=>'185 cm',
            'weight'=>'80 kg',
            'Age'=>'65',
            'Country' => 'Italy',
            'image' => '1.jpg',
            ''

        ],
        '2' => [

            'name' => 'Michael Corleone',
            'description' => 'Vito s youngest son, also the youngest in the family, inherited his father s calm, cool, smart,'
            . ' strong character. After assassinating Sollozzo and Mycoskie, he took refuge in Sicily, where he met a beautiful '
            . 'girl and got married. When his wife is murdered, he returns to the United States to take over the family business, '
            . 'becoming the second godfather and cleaning out the familys spies and enemies all at once',
            'height'=>'183 cm',
            'weight'=>'79 kg',
            'Age'=>'36',
            'Country' => 'USA',
            'image' => '2.jpg',
        ],
        '3' => [

            'name' => 'Santino Sonny Corleone',
            'description' => 'Vito s oldest son, Fredo and Michaels older brother, is a fiery character. His personal life was a mess, and he had multi
            . ple mistresses as well as his wife, but he was very protective of his family and its '
            . 'reputation. As the eldest son of the Lyons family, he was the heir to the family business, but because of reckless character, was killed by rival design,',
            'height'=>'165 cm',
            'weight'=>'60 kg',
            'Age'=>'43',
            'Country' => 'USA',
            'image' => '3.jpg',

        ],
        '4' => [

            'name' => 'Tom Hagen',
            'description' => 'The godfathers adopted orphan, a brother-in-arms with Mike, ac'
            . 'ted as an adviser to the Corleone family, a calm, rational figure who was a trusted '
            . 'adviser to the corleone family. He respected his godfather, loved Sonny and Mike, and loved '
            . 'his family. He faces problems on behalf of his boss and makes tough choices in the face of them.',
            'height'=>'178 cm',
            'weight'=>'70 kg',
            'Age'=>'32',
            'Country' => 'USA',
            'image' => '4.jpg',

        ],
        '5' => [

            'name' => 'Kay Adams',
            'description' => 'Mikes college classmate and girlfriend, who later became his wife. She had a sweet affair with Mike. After becoming Mike '
            . 's wife, she gradually came to know mike s true face, which led to the idea of aborting the child.',
            'height'=>'178 cm',
            'weight'=>'73 kg',
            'Age'=>'30',
            'Country' => 'USA',
            'image' => '5.jpg',

        ],

    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}*/
    protected $origin = WRITEPATH . 'data/pic/data.json';
    protected $keyField = 'id'; protected $validationRules = [];

}