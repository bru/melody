<?php
# Movable Type (r) Open Source (C) 2001-2009 Six Apart, Ltd.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id$

function smarty_function_mtauthorurl($args, &$ctx) {
    $author = $ctx->stash('author');
    if (empty($author)) {
        $entry = $ctx->stash('entry');
        if (!empty($entry)) {
            $author = $ctx->mt->db->fetch_author($entry['entry_author_id']);
        }
    }

    if (empty($author)) {
        return $ctx->error("No author available");
    }
    return isset($author['author_url']) ? $author['author_url'] : '';
}
?>
