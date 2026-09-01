<?php
// १. सबैभन्दा पहिले सेसन सुरु गर्ने
session_start();

// २. यदि 'product' भन्ने डाटा हटाउनु छ भने यसरी unset() गर्ने 
if (isset($_SESSION['product'])) {
    unset($_SESSION['product']); // केवल 'product' लाई मात्र हटाउँछ, अरूलाई छुँदैन
}

// ३. पेज भिजिट काउन्टर लजिक
if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1; // यदि पहिले नै छ भने १ अंकले बढाउने
} else {
    $_SESSION['page_count'] = 1;  // पहिलो पटक आउँदा १ सेट गर्ने
}

echo "You are visitor number " . $_SESSION['page_count'] . " in this session.";

// नोट: यदि सेसन पूरै नष्ट (Log out) गर्नु छ भने मात्र session_destroy() प्रयोग गरिन्छ।
// यसलाई सामान्यतया छुट्टै logout.php फाइलमा राखिन्छ, यसरी काम गर्ने कोडको लगत्तै तल राखिँदैन।
// session_destroy(); 
?>
