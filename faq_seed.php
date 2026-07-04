<?php
$faqs = [
    ['question' => 'What is a plate heat exchanger?', 'answer' => '<p>A plate heat exchanger is a type of heat exchanger that uses metal plates to transfer heat between two fluids. This has a major advantage over a conventional heat exchanger in that the fluids are exposed to a much larger surface area because the fluids spread out over the plates.</p>', 'sort_order' => 1],
    ['question' => 'What is the plate heat exchanger working principle?', 'answer' => '<p>The working principle involves two fluids passing through alternating channels formed by corrugated plates. Heat is transferred from the hot fluid to the cold fluid through the thin metal plates without the fluids ever mixing.</p>', 'sort_order' => 2],
    ['question' => 'Which Industries use plate heat exchangers?', 'answer' => '<p>They are widely used in HVAC, chemical processing, food and beverage, dairy, marine, power generation, and pharmaceutical industries due to their high efficiency and compact size.</p>', 'sort_order' => 3],
    ['question' => 'Are you plate heat exchanger manufacturers in India?', 'answer' => '<p>Yes, SRJ Heat Exchangers is a leading manufacturer of premium quality plate heat exchangers and replacement parts based in India with our own advanced manufacturing facility.</p>', 'sort_order' => 4],
    ['question' => 'Do you supply plate heat exchanger gasket and replacement plates?', 'answer' => '<p>Yes, we manufacture and supply OEM-quality replacement gaskets and plates compatible with all major global brands like Alfa Laval, GEA, Tranter, and more.</p>', 'sort_order' => 5],
    ['question' => 'How can I get plate heat exchanger price and quotation?', 'answer' => '<p>You can easily request a quote by clicking the "Get a Quote" button on our website, filling out the contact form, or directly calling our sales team with your specific requirements.</p>', 'sort_order' => 6],
];

foreach($faqs as $faq) {
    \App\Models\HomeFaq::create($faq);
}
echo "Done";
