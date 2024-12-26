<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class QuestionSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'math' => 'Given a triangle PQR with angle P = 60°, angle Q = 45°, and side PR = 10 cm. Determine the length of sides PQ and QR.',
                'biology' => 'A cell normally contains 54 chromosomes. During which phases of mitosis does the cell contain 108 chromosomes?',
                'physics' => "A baseball is thrown straight upward. What is the ball's acceleration at its highest point?",
                'chemistry' => 'At which temperature does a water sample have the highest average kinetic energy?',
                'english' => 'Change into passive voice: The events of Tuesday night shocked the local community.',
            ],
            [
                'math' => 'If (x + y)^2 = 17, and xy = 3, then x^2 + y^2 =',
                'biology' => 'A cell contains multiple nuclei with identical genetic information. This cell most likely formed by going through',
                'physics' => 'How long would it take a car, starting from rest and accelerating uniformly in a straight line at 5 m/s2, to cover a distance of 200 m?',
                'chemistry' => 'Explain states of matter.',
                'english' => 'Change into active voice: Suddenly, the penguin was caught by the leopard seal.',
            ],
            [
                'math' => 'On a map having a scale of 1/4 inch = 20 miles, how many inches should there be between towns that are 70 miles apart?',
                'biology' => 'An original cell replicates its DNA. The cell undergoes mitosis and cell division, and one of the daughter cells replicates its DNA. Which describes the DNA of the second-generation daughter cells?',
                'physics' => 'A rock is dropped off a cliff and strikes the ground with an impact velocity of 30 m/s. How high was the cliff?',
                'chemistry' => 'An atom has eight electrons in a 3D subshell. How many orbitals in this subshell have an unpaired electron?',
                'english' => 'Explain about homonyms and homophones.',
            ],
            [
                'math' => 'On January 1, 1950, a farmer bought a certain parcel of land for $1,500. Since then, the land has doubled in value every 12 years. At this rate, what will the value of the land be on January 1, 2010?',
                'biology' => "The partial sequence of a single DNA strand is shown. What will be the sequence of the complementary strand produced during DNA replication? 3'-ATGCTGAACT-5'",
                'physics' => "A stone is thrown horizontally with an initial speed of 30 m/s from a bridge. Find the stone's total speed when it enters the water 4 seconds later. (Ignore air resistance.)",
                'chemistry' => 'When an ionic compound is dissolved in water, the ions in solution can best be described as...',
                'english' => 'Explain the type of tenses.',
            ],
            [
                'math' => 'A certain type of cancer cell divides into two cells every four seconds. How many cells are observable 32 seconds after observing a total of four cells?',
                'biology' => 'How does the ATP synthase enzyme function in the cell?',
                'physics' => 'A soccer ball, at rest on the ground, is kicked with an initial velocity of 10 m/s at a launch angle of 30°. Calculate its total flight time, assuming that air resistance is negligible.',
                'chemistry' => 'In period 3 of the periodic table the atom with the largest atomic radius is located in group...',
                'english' => 'Explain about question tags.',
            ],
            [
                'math' => 'The seventh term of a geometric sequence with constant ratio 2 is 448. What is the first term of the sequence?',
                'biology' => 'Explain and give example about inheritance.',
                'physics' => 'A person who weighs 800 N steps onto a scale that is on the floor of an elevator car. If the elevator accelerates upward at a rate of 5 m/s^2, what will the scale read?',
                'chemistry' => 'When a salt dissolves in water, the water molecules are attracted by ions in solution. This attraction is called...',
                'english' => 'Explain about narrative, recount, and descriptive text.',
            ],
            [
                'math' => 'In the xy-plane, what is the slope of a line that contains the points (1,4) and (3,6)?',
                'biology' => 'At which stage of meiosis do cells from a sperm cell precursor contain a haploid set of chromosomes, each consisting of two sister chromatids?',
                'physics' => 'A frictionless inclined plane of length 20 m has a maximum vertical height of 5 m. If an object of mass 2 kg is placed on the plane, which of the following best approximates the net force it feels?',
                'chemistry' => '110 grams of KF are dissolved in water to make 850 ml of solution. What is the molarity of the solution?',
                'english' => 'Explain how to write an email.',
            ],
            [
                'math' => 'What is the equation of the line that is the perpendicular bisector of the line segment connecting points (4,2) and (3,5) in the xy plane?',
                'biology' => 'A recessive allele accounts for 60% of the alleles of a gene in a population. What proportion of the individuals in this population are heterozygous?',
                'physics' => 'The planet Pluto has 1/500 the mass and 1/15 the radius of Earth. What is the value of g on the surface of Pluto?',
                'chemistry' => 'A solution of a salt and 100 grams of water that can still dissolve more solute at a given temperature is classified as...',
                'english' => 'Explain the figures of speech.',
            ],
            [
                'math' => 'The square root of 25.6036 is exactly...',
                'biology' => 'A unicellular organism contains a Golgi body and ribosomes but lacks a cell wall. It is heterotrophic, ingesting food via phagocytosis. What kingdom does this organism belong to?',
                'physics' => 'Under the influence of a force, an object of mass 4 kg accelerates from 3 m/s to 6 m/s in 8 s. How much work was done on the object during this time?',
                'chemistry' => 'A compound has a composition of 40% sulfur and 60% oxygen by mass. What is the empirical formula of this compound?',
                'english' => 'Explain about idioms.',
            ],
            [
                'math' => 'The trinomial x^2 + 4x - 45 is exactly divisible by ... and ...',
                'biology' => 'How did the results of the Urey-Miller experiment affect the Oparin hypothesis?',
                'physics' => 'As a rock of mass 4 kg drops from the edge of a 40-meter-high cliff, it experiences air resistance, whose average strength during the descent is 20 N. At what speed will the rock hit the ground?',
                'chemistry' => 'How many joules of heat are released by a 150-gram sample of water that that cools from 25°C to 5°C? (c for H2O is 4.18 J/gK)',
                'english' => 'Explain about conjunctions and prepositions.',
            ],
            [
                'math' => 'Find the shortest side of a triangle whose perimeter is 64, if the ratio of two of its sides is 4 : 3 and the third side is 20 less than the sum of the other two.',
                'biology' => 'A nerve leading to the small intestine causes the rate of digestion to increase. This nerve MOST LIKELY belongs to which of the systems and divisions?',
                'physics' => 'A ball of mass 0.5 kg, initially at rest, acquires a speed of 4 m/s immediately after being kicked by a force of strength 20 N. For how long did this force act on the ball?',
                'chemistry' => 'Given the following reaction that has reached equilibrium: NaCl(s) => NaCl(aq). For the phase equilibrium to exist, the NaCl(aq) must be a solution that is...',
                'english' => 'Explain about comparatives and superlatives.',
            ],
            [
                'math' => 'How many quarts of water must be added to 18 quarts of a 32% alcohol solution to dilute it to a solution that is only 12% alcohol?',
                'biology' => 'What sequence is followed by the path of blood from the heart?',
                'physics' => 'Two objects, one of mass 3 kg and moving with a speed of 2 m/s and the other of mass 5 kg and speed 2 m/s, move toward each other and collide. Find the speed of the objects after the collision.',
                'chemistry' => 'When HCl(aq) reacts with Zn(s) the products formed are',
                'english' => 'Explain about complex nouns and compound words.',
            ],
            [
                'math' => 'Darren can mow the lawn in 20 minutes, while Valerie needs 30 minutes to do the same job. How many minutes will it take them to mow the lawn if they work together?',
                'biology' => 'Which type of biome is found at the lowest latitudes?',
                'physics' => 'An object of mass 0.5 kg, moving in a circular path of radius 0.25 m, experiences a centripetal acceleration of constant magnitude 9 m/s^2. What is the objectâ€™s angular speed?',
                'chemistry' => 'What volume of 0.200 M NaOH(aq) is needed to neutralize 40.0 mL of a 0.100 M HCl(aq)?',
                'english' => 'Explain about past modals.',
            ],
            [
                'math' => 'Mr. Barry invested some money at 5% and an amount half as great at 4%. His total annual income from both investments was $210. Find the amount invested at 4%.',
                'biology' => 'Explain the water cycle.',
                'physics' => "Explain about Archimedes' Law",
                'chemistry' => 'Which type of organic reaction is represented by the equation C3H6 + H2 => C3H8?',
                'english' => 'Explain about noun, adjective, verb, and adverb.',
            ],
            [
                'math' => 'Meredith is 3 times as old as Adam. Six years from now, she will be twice as old as Adam will be then. How old is Adam now?',
                'biology' => 'Explain photosynthesis.',
                'physics' => 'The potential at point A in an electric field is 10V higher than at point B. If a negative charge, q = -2 C, is moved from point A to point B, then the potential energy of this charge will',
                'chemistry' => 'Balance this chemical equation: C3H8 + O2 => H2O + CO2',
                'english' => 'What tenses are used in different type of texts?',
            ],
        ];

        foreach ($questions as $question) {
            DB::table('subject')->insert($question);
        }
    }
}
