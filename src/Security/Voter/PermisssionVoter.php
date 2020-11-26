<?php

namespace App\Security\Voter;

use stdClass;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class PermisssionVoter extends Voter
{
    public const PERMISSION = 'permission';
    private ?string $attribute;
    private $subject;

    protected function supports($attribute, $subject)
    {
        $this->attribute = $attribute;
        $this->subject = $subject;
        if (gettype($subject) === 'string' && $subject === self::PERMISSION) {
//            return in_array($attribute, ['POST_EDIT', 'POST_VIEW']);
            return true;
        }
        return false;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
//        dd('We get here');
//        return -1;
//        return self::ACCESS_GRANTED;
        return false;
//        dd($this->attribute, $this->subject);
//        $user = $token->getUser();
        // if the user is anonymous, do not grant access

//        if (!$user instanceof UserInterface) {
//            return false;
//        }
//
//        // ... (check conditions and return true to grant permission) ...
//        switch ($attribute) {
//            case 'POST_EDIT':
//                // logic to determine if the user can EDIT
//                // return true or false
//                break;
//            case 'POST_VIEW':
//                // logic to determine if the user can VIEW
//                // return true or false
//                break;
//        }
//
//        return false;
    }
}
